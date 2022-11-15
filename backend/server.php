<?php
class serverProcessing {
	private $dbh;
	private $hostname = 'default';
    private $dbname= 'waitlist';
    private $username = 'waitlist';
    private $password = 'waitlist';
    
	public function __construct($host=null,$db=null,$user=null,$pass=null) {
        $this->hostname = (is_null($host) ? $this->hostname : $host);
        $this->dbname 	= (is_null($db)   ? $this->dbname : $db);
        $this->username = (is_null($user) ? $this->username : $user);
        $this->password = (is_null($pass) ? $this->password : $pass);
	}
	
	public function connect() { // Connect To the Database
		try
		{
			$options = [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_CASE => PDO::CASE_NATURAL,
				PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
			];
			
			/* Actual connection */
			$this->dbh = new PDO('mysql:host='.$this->hostname.';dbname='.$this->dbname, $this->username, $this->password, $options);
			return true;
		}
		catch (PDOException $e)
		{
			return false;
		}
	}

    public function addNewUser($profileid=null, $email=null, $twitterAddress=null, $ethereumAddress=null, $referredLink=null, $otp=null) {
		if($this->dbh){
			try {
				$pdoCheckIfUserExists = $this->dbh->prepare("
					SELECT COUNT(*) AS numofusers, profileid FROM `users` WHERE email='$email'
				");
				$pdoCheckIfUserExists->execute();
				$pdoCheckIfUserExistsRow = $pdoCheckIfUserExists->fetch(PDO::FETCH_ASSOC);

				if($pdoCheckIfUserExistsRow['numofusers'] > 0) {
					return [101, $pdoCheckIfUserExistsRow['profileid'], 'We have you already in our waitlist'];
				} else {
					$data = [
						'profileid' => $profileid,
						'email' => $email,
						'twitterAddress' => $twitterAddress,
						'ethereumAddress' => $ethereumAddress,
						'referredLink' => $referredLink,
						'otp' => $otp,
						'confirmed' => 'no'
					];
					/* Use prepared statements for maximum security against injections */
					$pdoAddNewUsers = $this->dbh->prepare("
						INSERT INTO `users` (profileid, email, twitteraddress, ethereumaddress, referredlink, otp, confirmed) 
						VALUES (:profileid, :email, :twitterAddress, :ethereumAddress, :referredLink, :otp, :confirmed)
					");
					$pdoAddNewUsers->execute($data);
					return [100, 'success', $profileid, $email];
				}
			}
			catch (PDOException $e) {
				return [104, $e];
			}
		} else { 
			return [105, '']; 
		}
	}

	public function verifyOTP($profileid=null, $otp=null) {
		if($this->dbh){
			try {
				$pdoVerifyOTP = $this->dbh->prepare("
					SELECT email, otp FROM `users` WHERE profileid='$profileid'
				");
				$pdoVerifyOTP->execute();
				$pdoVerifyOTPRow = $pdoVerifyOTP->fetch(PDO::FETCH_ASSOC);

				if($pdoVerifyOTPRow['otp'] === $otp) {
					$pdoConfirmUser = $this->dbh->prepare("
						UPDATE `users` SET confirmed='yes' WHERE profileid = '$profileid'
					");
					$pdoConfirmUser->execute();
					return [100, $pdoVerifyOTPRow['email'], 'OTP is correct'];
				} else {
					return [101, $pdoVerifyOTPRow['email'], 'OTP is incorrect'];
				}
			}
			catch (PDOException $e) {
				return [104, $e];
			}
		} else { 
			return [105, '']; 
		}
	}

	public function resendOTP($profileid=null, $otp=null) {
		if($this->dbh){
			try {
				$pdoFetchEmail = $this->dbh->prepare("
					SELECT email FROM `users` WHERE profileid='$profileid'
				");
				$pdoFetchEmail->execute();
				$pdoFetchEmailRow = $pdoFetchEmail->fetch(PDO::FETCH_ASSOC);

				$pdoResendOTP = $this->dbh->prepare("
					UPDATE `users` SET otp='$otp' WHERE profileid = '$profileid'
				");
				$pdoResendOTP->execute();
				return [100, $pdoFetchEmailRow['email'], $profileid, $otp];
			} catch (PDOException $e) {
				return [104];
			}
		} else { 
			return [105]; 
		}
	}

	public function getRatings($profileid=null) {
		if($this->dbh){
			try {
				$pdoPositionArray = array();

				$pdoNoOfReferrals = $this->dbh->prepare("
					SELECT COUNT(referredLink) AS referredLink FROM `users` WHERE referredLink = '$profileid'
				");
				$pdoNoOfReferrals->execute();
				$pdoNoOfReferralsRow = $pdoNoOfReferrals->fetch(PDO::FETCH_ASSOC);


				$pdoPosition = $this->dbh->prepare("
					SELECT ROW_NUMBER() OVER(ORDER BY referredlink ASC) AS position, referredlink,  COUNT(referredlink) AS noOfReferredLink FROM `users` WHERE referredlink != ''  GROUP BY referredLink ORDER BY noOfReferredLink DESC
				");
				$pdoPosition->execute();
				while (is_array($pdoPositionRow = $pdoPosition->fetch(PDO::FETCH_ASSOC))) {
					if($pdoPositionRow['referredlink'] === $profileid) {
						$pdoPositionArrayKey['position'] = $pdoPositionRow['position'];
						$pdoPositionArrayKey['referredlink'] = $pdoPositionRow['referredlink'];
						$pdoPositionArrayKey['noOfReferredLink'] = $pdoPositionRow['noOfReferredLink'];
						array_push($pdoPositionArray, $pdoPositionArrayKey);
					}
				}

				return [100, $pdoPositionArray];
			} catch (PDOException $e) {
				return [104];
			}
		} else { 
			return [105]; 
		}
	}
}
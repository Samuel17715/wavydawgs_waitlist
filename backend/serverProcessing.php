<?php
    header("Access-Control-Allow-Origin: *");

    require_once ('db.php');
    require_once ('sendEmail.php');
    
    // Request Data
    $requestData = json_decode($_POST['requestData']);

    // User Registration
    if($requestData->requestType == 'addNewUser') {
        $profileid = rand(10000000,99999999); // 8 Digits
        $referredLink = '';
        $otp = rand(100000,999999); // 6 Digits

        $addNewUser = $pdo->addNewUser($profileid, $requestData->email, $requestData->twitter, $requestData->ethereum, $requestData->referredLink, $otp);
        if($addNewUser[0] === 100) {
            sendEmail($requestData->email, 'Waitlist - Your OTP Code', 'Your OTP code is <br> <strong>'.$otp.'</strong>');
        }
        echo json_encode($addNewUser);
    }

    // Verify OTP
    if($requestData->requestType == 'verifyOTP') {
        $verifyOTP = $pdo->verifyOTP($requestData->profileID, $requestData->otpInput);
        if($verifyOTP[0] === 100){
            sendEmail($verifyOTP[1], 'Congrats!.', 'You have been added to our waitlist.');
        }
        echo json_encode($verifyOTP);
    }

    // Resend OTP
    if($requestData->requestType == 'resendOTP') {
        $otp = rand(100000,999999); // 6 Digits
        $resendOTP = $pdo->resendOTP($requestData->profileID, $otp);
        if($resendOTP[0] === 100){
            sendEmail($resendOTP[1], 'Waitlist - Your OTP Code', 'Your OTP code is <br> <strong>'.$otp.'</strong>');
        }
        echo json_encode($resendOTP);
    }

    // Ratings
    if($requestData->requestType == 'ratings') {
        $ratings = $pdo->getRatings($requestData->profileID);
        echo json_encode($ratings);
    }
?>
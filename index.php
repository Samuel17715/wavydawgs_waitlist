<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-[#111111]">
    <div class="containerDiv flex justify-center items-center w-full h-screen p-3 lg:p-12">
        <div class="w-full lg:w-[33%] rounded-2xl">
            <div class="h-[170px] bg-[url('../assets/img/wavydawgs_banner_3.jpg')] bg-cover bg-center rounded-t-2xl">
            </div>
            <div class="relative top-[-1.5rem] bg-[#3e046c] h-full rounded-t-[1.35rem] rounded-b-2xl">
                
                <div class="divTab divTab1 p-8" style="display: block;">
                    <h2 class="text-[#ffffff] font-semibold uppercase tracking-widest mt-3 mb-8">Join Waitlist</h2>

                    <form class="waitlistForm" data-id="1">
                        <div class="my-6">
                            <label class="block font-normal text-sm">Email Address</label>
                            <input type="email" class="emailAddress" placeholder="Email Address" autocomplete="" required>
                        </div>
                        <div class="my-6">
                            <label class="block font-normal text-sm">Twitter Handle</label>
                            <input type="text" class="twitterHandle" placeholder="Twitter Username">
                        </div>

                        <div class="my-6">
                            <label class="block font-normal text-sm">Ethereum Wallet Address</label>
                            <input type="text" class="ethereumAddress" placeholder="Type your address" required>
                        </div>

                        <div class="mt-8">
                            <input type="submit" value="Join Now" />
                        </div>

                        <p class="notifications text-xs text-center my-4 px-2 py-4 rounded-xl bg-[#37247e]" style="display: none"></p>
                    </form>
                </div>

                <div class="divTab divTab2 p-8" style="display: none;">
                    <h4 class="text-xl font-medium text-[#ffffff] mb-8">Enter OTP sent to <span class="font-medium"></span></h4>
                    <form class="waitlistForm" data-id="2">
                        <div class="my-6">
                            <label class="block font-normal text-sm">Enter OTP</label>
                            <input type="text" class="otpInput" placeholder="OTP Code (6 digits)" minlength="6" maxlength="6" required>
                        </div>
                        <div class="my-1 w-full">
                            <div class="py-2" onclick="resendOTP()">
                                <h4 class="cursor-pointer font-bold text-right">Resend OTP</h4>
                            </div>
                        </div>
                        <div class="mt-8">
                            <input type="submit" value="Submit OTP" />
                        </div>

                        <p class="notifications text-xs text-center my-3 px-2 py-4 rounded-xl bg-[#37247e]" style="display: none"></p>
                    </form>
                </div>

                <div class="divTab divTab3 p-10 bg-[#ffffff] rounded-t-[1.35rem] rounded-b-2xl" style="display: none;">
                    <div class="mb-10">
                        <h4 class="font-extrabold text-2xl tracking-tight pb-1">Congrats!. 🎉</h4>
                        <h6 class="text-sm font-semibold text-[#4f4f4f]">You have been added to our waitlist, we will update you soon.</h6>
                    </div>

                    <div class="my-10">
                        <div class="flex justify-between items-center gap-x-2">
                            <div class="flex flex-col justify-center items-center w-full">
                                <div>
                                    <svg width="50" height="50" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M49.2534 29.4824H40.7559V9.6824C40.7559 5.0624 38.2534 4.1274 35.2009 7.5924L33.0009 10.0949L14.3834 31.2699C11.8259 34.1574 12.8984 36.5224 16.7484 36.5224H25.2459V56.3224C25.2459 60.9424 27.7484 61.8774 30.8009 58.4124L33.0009 55.9099L51.6184 34.7349C54.1759 31.8474 53.1034 29.4824 49.2534 29.4824Z" fill="#FCCF55"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm">Position</h4>
                                <h2 class="userPosition font-bold text-center text-3xl">0</h2>
                            </div>
                            
                            <div class="flex flex-col justify-center items-center w-full">
                                <div>
                                    <svg width="48.75" height="48.75" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M42.8751 4.8125C34.7076 4.8125 28.0801 11.44 28.0801 19.6075C28.0801 27.775 34.7076 34.4025 42.8751 34.4025C51.0426 34.4025 57.6701 27.775 57.6701 19.6075C57.6701 11.44 51.0426 4.8125 42.8751 4.8125Z" fill="#3AA346"/><path d="M17.4876 35.8359C12.4551 35.8359 8.33008 39.9334 8.33008 44.9934C8.33008 50.0534 12.4276 54.1509 17.4876 54.1509C22.5201 54.1509 26.6451 50.0534 26.6451 44.9934C26.6451 39.9334 22.5201 35.8359 17.4876 35.8359Z" fill="#3AA346"/><path d="M45.706 45.707C41.4435 45.707 37.9785 49.172 37.9785 53.4345C37.9785 57.697 41.4435 61.162 45.706 61.162C49.9685 61.162 53.4335 57.697 53.4335 53.4345C53.4335 49.172 49.9685 45.707 45.706 45.707Z" fill="#3AA346"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm">Points</h4>
                                <h2 class="userPoints font-bold text-center text-3xl">0</h2>
                            </div>

                            <div class="flex flex-col justify-center items-center w-full">
                                <div>
                                    <svg width="48.75" height="48.75" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.3743 5.41797C17.2785 5.41797 11.5098 11.1867 11.5098 18.2826C11.5098 25.243 16.9535 30.8763 24.0494 31.1201C24.266 31.093 24.4827 31.093 24.6452 31.1201C24.6994 31.1201 24.7264 31.1201 24.7806 31.1201C24.8077 31.1201 24.8077 31.1201 24.8348 31.1201C31.7681 30.8763 37.2119 25.243 37.2389 18.2826C37.2389 11.1867 31.4702 5.41797 24.3743 5.41797Z" fill="#4526B1"/><path d="M38.1355 38.3211C30.5793 33.2836 18.2564 33.2836 10.646 38.3211C7.20638 40.6232 5.31055 43.7378 5.31055 47.069C5.31055 50.4003 7.20638 53.4878 10.6189 55.7628C14.4105 58.3086 19.3939 59.5815 24.3772 59.5815C29.3605 59.5815 34.3439 58.3086 38.1355 55.7628C41.548 53.4607 43.4439 50.3732 43.4439 47.0148C43.4168 43.6836 41.548 40.5961 38.1355 38.3211Z" fill="#4526B1"/><path d="M54.1379 19.8732C54.5712 25.1273 50.8337 29.7315 45.6608 30.3544C45.6337 30.3544 45.6337 30.3544 45.6066 30.3544H45.5254C45.3629 30.3544 45.2004 30.3544 45.065 30.4086C42.4379 30.544 40.0275 29.7044 38.2129 28.1607C41.0025 25.669 42.6004 21.9315 42.2754 17.869C42.0858 15.6753 41.3275 13.6711 40.19 11.9648C41.2191 11.4503 42.4108 11.1253 43.6296 11.0169C48.9379 10.5565 53.6775 14.5107 54.1379 19.8732Z" fill="#4526B1"/><path d="M59.5573 44.9336C59.3406 47.5607 57.6615 49.8357 54.8448 51.3795C52.1365 52.869 48.724 53.5732 45.3385 53.492C47.2885 51.7315 48.426 49.5378 48.6427 47.2086C48.9135 43.8503 47.3156 40.6274 44.1198 38.0545C42.3052 36.619 40.1927 35.4815 37.8906 34.642C43.876 32.9086 51.4052 34.0732 56.0365 37.8107C58.5281 39.8149 59.801 42.3336 59.5573 44.9336Z" fill="#4526B1"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm">Referrals</h4>
                                <h2 class="userReferrals font-bold text-center text-3xl">0</h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap mb-6">
                        <div class="w-[100%] mb-3">
                            <label class="block font-normal text-sm">Copy your Referral Link and Earn</label>
                        </div>
                        <div class="w-[70%]">
                            <input type="text" class="shareinputField w-full p-4 outline-none rounded-l-md bg-[#f2f0f5]" value="" placeholder="Referral Link" required>
                        </div>
                        <div class="copyLink w-[30%] uppercase tracking-widest font-bold text-sm text-[#000000] flex justify-center items-center bg-[#B9F2FF] rounded-r-md" data-val="https://localhost?ref=57687">
                            Copy
                        </div>
                    </div>


                    <h4 class="block font-normal text-sm">Invite your friends</h4>
                    <div class="flex gap-x-3 mb-5">
                        <div class="w-full lg:w-1/2">
                            <a target="_blank" class="twitter-share-button"
                            href="https://twitter.com/intent/tweet?text=Join%20Wavy%20Dawgs%20through%20this%20link%20https://localhost?ref=57687"
                            data-size="large">
                                <div class="flex items-center px-3 py-3 mt-4 bg-[#1DA1F2] rounded-lg">
                                    <div><img src="assets/img/twitter.png" width="30px"></div>
                                    <div class="text-[#ffffff] pl-4">Share on Twitter</div> 
                                </div>
                            </a>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <a target="_blank" class="twitter-share-button"
                            href="https://discord.com/channels/?text=Join%20Wavy%20Dawgs%20through%20this%20link%20https://localhost?ref=57687"
                            data-size="large">
                                <div class="flex items-center px-3 py-3 mt-4 bg-[#5765f2] rounded-lg">
                                    <div><img src="assets/img/discord.png" width="30px"></div>
                                    <div class="text-[#ffffff] pl-4">Share on Discord</div> 
                                </div>
                            </a>
                        </div>
                    </div>

                    <h4 class="block font-normal text-sm">Follow us</h4>
                    <div class="flex gap-x-2">
                        <div class="w-full">
                            <a target="_blank" class="twitter-follow-button"
                            href="https://twitter.com/wavydawgs?ref_src=twsrc%5Etfw"
                            data-size="large">
                                <div class="flex items-center px-3 py-3 mt-4 bg-[#1d0f4f] rounded-lg">
                                    <div><img src="assets/img/twitter.png" width="30px"></div>
                                    <div class="text-[#ffffff] pl-4">Follow</div> 
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a target="_blank" class="discord-share-button"
                            href="https://discord.com/channels/?text=Join%20Wavy%20Dawgs%20through%20this%20link%20https://localhost?ref=57687"
                            data-size="large">
                                <div class="flex items-center px-3 py-3 mt-4 bg-[#1d0f4f] rounded-lg">
                                    <div><img src="assets/img/discord.png" width="30px"></div>
                                    <div class="text-[#ffffff] pl-4">Share</div> 
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a target="_blank" class="linkedin-share-button"
                            href="https://linkedin.com"
                            data-size="large">
                                <div class="flex items-center px-3 py-3 mt-4 bg-[#1d0f4f] rounded-lg">
                                    <div><img src="assets/img/linkedin.png" width="30px"></div>
                                    <div class="text-[#ffffff] pl-4">Follow</div> 
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const referredCode = urlParams.has('ref') ? urlParams.get('ref') : '';

        var profileID;
        
        // Copy & Paste Function
        document.querySelector('.copyLink').addEventListener('click', function(event) {
            let selectElement = this;
            let copiedDataText = selectElement.getAttribute('data-val'); 

            navigator.clipboard.writeText(copiedDataText).then(function() {
                selectElement.innerHTML = 'Copied !!!';
            }, function() {
                selectElement.innerHTML = 'Try Again';
            });
            
            let copiedDataTextFunc = () => {
                selectElement.innerHTML = 'Copy';
            }
            setTimeout(copiedDataTextFunc, 2500);
        }); 

        let submitToServer = async (data) => {
            try {
                const response = await fetch('backend/serverProcessing.php', {
                    method: 'POST', // or 'PUT'
                    headers: { "Content-Type": "application/x-www-form-urlencoded" }, 
                    body: 'requestData=' + JSON.stringify(data),
                })
                return await response.json();
            } catch (err) {
                console.log(err);
                return err;
            }
        }


        // Submit Data to Waitlist
        let submitWaitlist = async (event) => {
            event.preventDefault();

            let formData = {};
            formData.email = document.querySelector('form.waitlistForm[data-id="1"] .emailAddress').value;
            formData.twitter = document.querySelector('form.waitlistForm[data-id="1"] .twitterHandle').value;
            formData.ethereum = document.querySelector('form.waitlistForm[data-id="1"] .ethereumAddress').value;
            formData.referredLink = referredCode;
            formData.requestType = 'addNewUser';

            // Before Submit
            let initialBtnContent = document.querySelector('form.waitlistForm[data-id="1"] input[type="submit"]').value;
            document.querySelector('form.waitlistForm[data-id="1"] input[type="submit"]').setAttribute('disabled', 'disabled'); // Disable Button
            document.querySelector('form.waitlistForm[data-id="1"] input[type="submit"]').value = 'Loading...';
            
            // Submit to Server
            let response = await submitToServer(formData);

            // After Submit
            document.querySelector('form.waitlistForm[data-id="1"] input[type="submit"]').removeAttribute('disabled');
            document.querySelector('form.waitlistForm[data-id="1"] input[type="submit"]').value = initialBtnContent;

            if(response[0] === 100) {
                // Update ProfileID
                profileID = response[2];
                
                // View Second (OTP) Form
                document.querySelectorAll('.divTab').forEach(function(el) {
                    el.style.display = 'none';
                })
                document.querySelector('.divTab2').style.display = 'block';
                document.querySelector('.divTab2 h4 span').innerHTML = response[3];

            } else if (response[0] === 101) {
                // Update ProfileID
                profileID = response[1];

                document.querySelector('form.waitlistForm[data-id="1"] p.notifications').innerHTML = response[1];
                document.querySelector('form.waitlistForm[data-id="1"] p.notifications').style.display = 'block';

                // View Ratings and Share Links
                viewRatingsAndShareLinks();
            } else {

            }
        }

        // Resend OTP
        let resendOTP = async () => {
            let formData = {};
            formData.profileID = profileID;
            formData.requestType = 'resendOTP';

            // Before Submit
            let initialBtnContent = document.querySelector('form.waitlistForm[data-id="2"] input[type="submit"]').value;
            document.querySelector('form.waitlistForm[data-id="2"] input[type="submit"]').setAttribute('disabled', 'disabled'); // Disable Button
            document.querySelector('form.waitlistForm[data-id="2"] input[type="submit"]').value = 'Loading...';

            // Submit to Server
            let response = await submitToServer(formData);

            // After Submit
            document.querySelector('form.waitlistForm[data-id="2"] input[type="submit"]').removeAttribute('disabled');
            document.querySelector('form.waitlistForm[data-id="2"] input[type="submit"]').value = initialBtnContent;

            if(response[0] === 100) {
                document.querySelector('form.waitlistForm[data-id="2"] .notifications').innerHTML = 'An OTP has been sent to your ' + response[1];
                document.querySelector('form.waitlistForm[data-id="2"] .notifications').style.display = 'block';
            }
        }

        // Verify OTP
        let verifyOTP = async (event) => {
            event.preventDefault();

            let formData = {};
            formData.profileID = profileID;
            formData.otpInput = document.querySelector('form.waitlistForm[data-id="2"] .otpInput').value;
            formData.requestType = 'verifyOTP';

            // Before Submit
            let initialBtnContent = document.querySelector('form.waitlistForm[data-id="2"] input[type="submit"]').value;
            document.querySelector('form.waitlistForm[data-id="2"] input[type="submit"]').setAttribute('disabled', 'disabled'); // Disable Button
            document.querySelector('form.waitlistForm[data-id="2"] input[type="submit"]').value = 'Loading...';
            
            // Submit to Server
            let response = await submitToServer(formData);

            // After Submit
            document.querySelector('form.waitlistForm[data-id="2"] input[type="submit"]').removeAttribute('disabled');
            document.querySelector('form.waitlistForm[data-id="2"] input[type="submit"]').value = initialBtnContent;

            if(response[0] === 100) {
                // View Ratings and Share Links
                viewRatingsAndShareLinks();
            } else {
                document.querySelector('form.waitlistForm[data-id="2"] .notifications').innerHTML = response[1];
                document.querySelector('form.waitlistForm[data-id="2"] .notifications').style.display = 'block';
            }
        }

        // View Ratings and Share Links
        let viewRatingsAndShareLinks = async () => {
            document.querySelectorAll('.divTab').forEach(function(el) {
                el.style.display = 'none';
            })
             document.querySelector('.divTab3').style.display = 'block';

            
            document.querySelector('.shareinputField').value = window.location.hostname + window.location.pathname + '?ref='+profileID;
            document.querySelector('.copyLink').setAttribute('data-val', window.location.hostname + window.location.pathname + '?ref='+profileID);
            document.querySelector('.twitter-share-button').setAttribute('href', 'https://twitter.com/intent/tweet?text=Join%20Wavy%20Dawgs%20through%20this%20link%20' + window.location.hostname + window.location.pathname + '?ref='+profileID);
        
            // Submit to Server
            let formData = {};
            formData.profileID = profileID;
            formData.requestType = 'ratings';

            let response = await submitToServer(formData);
            if(response[0] === 100) {
                if(response[1].length === 0) {
                    document.querySelector('.userPosition').innerHTML = '500';
                    document.querySelector('.userReferrals').innerHTML = '0';
                } else {
                    document.querySelector('.userPosition').innerHTML = response[1][0].position;
                    document.querySelector('.userReferrals').innerHTML = response[1][0].noOfReferredLink;
                }
            }
            console.log(response);
        }

        // Form 1
        document.querySelector('form.waitlistForm[data-id="1"]').addEventListener('submit', submitWaitlist);

        // Form 2
        document.querySelector('form.waitlistForm[data-id="2"]').addEventListener('submit', verifyOTP);
    </script>
</body>
</html>
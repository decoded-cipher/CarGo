
<?php
function send_otp($mobile) {
    $mobileNumber = '91' . $mobile;
    
    $otp = mt_rand(99999, 999999);

    $_SESSION['otp'] = $otp;

    $otp_msg = "Dear Customer,  Please enter the One Time Password (OTP) to continue CarGo Carpool Registration. Your OTP verification code is " . $otp;

  //  echo '<br/><br/><br/>'.$otp_msg.'<br/><br/><br/>';
    //Your authentication key
    //$authKey = "290224AwtzqyenfcnQ5d5addbd";
      $authKey = "306471AeHKiEVz5de3b4df";


//Sender ID,While using route4 sender id should be 6 characters long.
    $senderId = "xCARGO";

//Your message to send, Add URL encoding here.
    $message = urlencode($otp_msg);

//API URL
    $url = "http://api.msg91.com/api/sendotp.php?authkey=" . $authKey . "&mobile=" . $mobileNumber . "&message=" . $otp_msg . "&sender=" . $senderId . "&otp=" . $otp;
 
// init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
      //  CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
    ));


//Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
    $output = curl_exec($ch);

//Print error if any
    if (curl_errno($ch)) {
        echo 'error:' . curl_error($ch);
    }
    
    curl_close($ch);

    return $output;
}
?>
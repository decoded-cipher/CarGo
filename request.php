
        <?php
      require_once "model/db.php";
      if($_REQUEST['action']=='verify_otp')
      {
if($_SESSION['otp']== $_REQUEST['otp'])
{
  $qry="Update registration set mobile_verified = 1 where user_id =". $_SESSION['user_id'];
  mysqli_query($con, $qry);
  $_SESSION['mobile_verified'] = 1;
 // header('location:drive.php');
 echo json_encode(array('success'=>1, 'page' => 'drive.php'));
}
else
{
  echo json_encode(array('msg'=>'Incorrect OTP','success'=>0));
}
      die;
       }
if($_REQUEST['action']=='resend_otp'){
  require_once 'send-otp.php';
  $mobile = $_SESSION['mobile'];
  $res = send_otp($mobile);
  if($res)
  echo json_encode(array('msg'=>'OTP Sent Successfully'));
  die;
}

        ?>



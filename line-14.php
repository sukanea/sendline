<?php
function send_line_notify($message, $token)
{
  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
  curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt( $ch, CURLOPT_POST, 1);
  curl_setopt( $ch, CURLOPT_POSTFIELDS, "message=$message");
  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
  $headers = array( "Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token",);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec( $ch );
  curl_close( $ch );
 
  return $result;
}
 
 
 
 /* กลุ่มนักวิทย์  */
 
 
$mesg = $_POST['mesg'];
 
 
 
 
$message =  $mesg;
$token = 'jjH55kPzhBf26Hxr9D31qbSyxSepX7pifPB8YbWERYC';

 
echo send_line_notify($message, $token);
 
 
 
 
 
?>
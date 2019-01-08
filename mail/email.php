<?php
require 'PHPMailerAutoload.php';
require 'credentials.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  //checking is email is valid or not
  $sql="SELECT * FROM user where cemail='$email'";
  $result=mysqli_query($db,$sql);
  if(mysqli_num_rows($result) <= 0)
  {
    header('location: ../forgotpassword.php');
    echo"<script>alert('This email is not valid');</script>";

  }
  else
   {
     $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
     $protected=md5($s);
     $sql4="UPDATE user SET cpassword = '$protected' WHERE cemail='$email'";
     mysqli_query($db,$sql4);

     $mail = new PHPMailer;
     $mail->SMTPOptions = array(
         'ssl' => array(
             'verify_peer' => false,
             'verify_peer_name' => false,
             'allow_self_signed' => true
         )
     );

    // $mail->SMTPDebug = 1;                               // Enable verbose debug output
     $mail->isSMTP();                                      // Set mailer to use SMTP
     $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
     $mail->SMTPAuth = true;                               // Enable SMTP authentication
     $mail->Username = EMAIL;                 // SMTP username
     $mail->Password = PASS;                           // SMTP password
     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
     $mail->Port = 587;                                    // TCP port to connect to

     $mail->setFrom(EMAIL, 'Virtual Travel Guide');
     $mail->addAddress($email, 'VTG');     // Add a recipient
     // $mail->addAddress('ellen@example.com');               // Name is optional
     //$mail->addReplyTo(EMAIL, 'Information');


     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
     $mail->isHTML(true);                                  // Set email format to HTML

     $mail->Subject = 'Password Change';
     $mail->Body    = 'Your password has been changed. Your new password is <b>'.$s.'</b> <br> You can change your password again from your profile';
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

     if(!$mail->send()) {
         echo 'Message could not be sent.';
         echo 'Mailer Error: ' . $mail->ErrorInfo;
     } else {
         echo 'Message has been sent';
         header('Location: ../index.php');
     }

  }

}

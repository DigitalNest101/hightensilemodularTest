<?php 
// $to = "amaanansari7999@gmail.com";
//   $name = $_POST['name'];
//   $from = $_POST['email'];
//   $subject = $_POST['subject'];
//   $message = $_POST['message'];

// $headers = "From: $from ";
// $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
//         $body = join(PHP_EOL, $bodyParagraphs);
// // mail($to,$subject,$message,$headers);
// if(mail($to,$subject,$body,$headers))
//   {
//      echo "success";
//      }else{
//      echo "error";
//  }

    $to = "adamsaifee101@gmail.com";
   
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers ="Content-type: text/html;From: $from";
    $subject = $_REQUEST['subject'];

    $fields = array();
    $fields["name"] = $_REQUEST['name'];
    $fields["email"] = $_REQUEST['email'];
    $fields["subject"] = $_REQUEST['subject'];
    $fields["mobile"] = $_REQUEST['mobile'];
    $fields["message"] = $_REQUEST['message'];


    $body = '<strong>Name</strong> : '.$fields['name']. '<br><br>';
    $body .= '<strong>Email</strong> : '.$fields['email']. '<br><br>';
    $body .= '<strong>Subject</strong> : '.$fields['subject']. '<br><br>';
    $body .= '<strong>Mobile</strong> : '.$fields['mobile']. '<br><br>';
    $body .= '<strong>Message</strong> : <br><br>'.$fields['message']. '<br>';
 
 $send =mail($to, $subject, $body, $headers);
 $sss= mail($sms, $subject, $body, $headers);
?>
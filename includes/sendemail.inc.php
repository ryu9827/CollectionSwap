<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
class sendemail{
         
        
        
       function sendEmail($to='', $subject='' ,$body='' ){
        include_once "class.phpmailer.php";
       include_once "class.smtp.php";

        $mail=new PHPMailer();
       // $body = eregi_replace("[\]",'',$body);
      //  $body="<h1>test</h1>";
//set smtp
        //$mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPKeepAlive = true;
        $mail->SMTPDebug = 2;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
//set email address and pwd
        $mail->Username = "collectionswap@gmail.com";
        $mail->Password = "administration";
        $mail->From = "collectionswap@gmail.com";
        $mail->FromName = "collectionswap team";
        $mail->Subject = $subject;
        $mail->AltBody = $body;
        $mail->WordWrap = 50; // set word wrap
        $mail->MsgHTML($body);
//set reply to email
         $mail->AddReplyTo("collectionswap@gmail","Admin");

//add attachment
#$mail->AddAttachment("attachment.jpg");
#$mail->AddAttachment("attachment.zip");
//set reciver
        $address = $to;
        $mail->AddAddress($address, "Hello");
      
//use html format
        $mail->IsHTML(true);

         if(!$mail->Send()){
         //echo "Mailer Error:".$mail->ErrorInfo;
         }else{
          echo "Message has been sent,please check your email";
       
        
         }
    }
}



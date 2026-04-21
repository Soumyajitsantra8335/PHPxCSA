<?php
//c:/xampp/sendmail/sendmail.ini
//sendmail.ini
//smtp_server=smtp.gmail.com
//smtp_port=587
//smtp_ssl=tls   not mandatory
//
//auth_username=karanpandey261@gmail.com
//auth_password=YOUR_APP_PASSWORD      //Gmail
                                       //Google Account → Security
                                       //2-Step Verification ON 
                                       // Search : App Password
                                       //Generate → Mail → Windows //Computer
                                       // 16-digit password 
//
//force_sender=karanpandey261@gmail.com
//php.ini
//sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
//sendmail_from = karanpandey261@gmail.com
//             Actual PHP Mail Directives
	//   Directive	                        Purpose
     //SMTP	                          SMTP server address
     //smtp_port	                  SMTP port
     //sendmail_from	              Default sender email
     //sendmail_path	              sendmail program path
     //mail.add_x_header	          Add extra header
     //mail.log	                      Mail log file path
     //mail.force_extra_parameters	  Extra parameters
     //mail.mixed_lf_and_crlf	      Line separator control

     
          //for exam mail directive 
//	Directive	              Purpose
//   SMTP	                 SMTP server address
//   smtp_port	             SMTP port number
//   sendmail_from	         Default sender email
//   sendmail_path	         sendmail.exe  path
//   mail.add_x_header	     add Extra header 


$to="sunnysantra64@gmail.com";
$subject="for the experiance vbdfbdbd";
$message="this is email body";
$headers = "From: soumosantra588@gmail.com";

if(mail($to,$subject,$message,$headers)){
    echo "mail sent successfully";
}else{
    echo "mail not sent";
}


?>
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "shubho@startechnosys.com";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $phone = $_REQUEST['phone'];
  //$subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, $name . " : " . $phone , $comment, "From:" . $email);
  
  //Email response
  echo "thank you for contacting us we will reply as soon as possible!";
  }
?>
<?php
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  echo "Welcome: $name"; 
  echo "<br>";
  echo "Your email is: $email"; 
  echo "<br>";
  echo "Your phone is: $phone"; 
  echo "<br>";
  echo "Your message is: $message"; 
  echo "<br>";
}
?>
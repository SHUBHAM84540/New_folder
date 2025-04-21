<?php 
$connection = mysqli_connect('localhost','root');                 
mysqli_select_db($connection,"gymweb");                
$user = $_POST['user']; $mail = $_POST['mail']; 
$phone = $_POST['phone']; 
$address = $_POST['address']; 
$query = "INSERT INTO 'userinfodata'('user','mail','phone','address') VALUES('$user','$mail','$phone','$address')"; 
mysqli_query($connection,$query); 
echo "REGISTERED SUCCESSFYLLY"; 
 
?> 


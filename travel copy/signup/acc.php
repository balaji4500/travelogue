<?php
$firstname=$_POST['first'];
$secondname=$_POST['second'];
$email=$_POST['email'];
$password=$_POST['pass'];
$obj= new mysqli('localhost','root','','travel');
$str="INSERT INTO newaccount values('$firstname','$secondname','$email','$password')";
$obj->query($str);
$obj->close();
echo 'account created';



?>

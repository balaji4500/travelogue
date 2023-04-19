<?php

$email=$_POST['email'];
$pass=$_POST['pass'];
$obj= new mysqli('localhost','root','','travel');
$str="INSERT INTO signup(email,password) values('$email','$pass')";
$obj->query($str);
$obj->close();
echo'successfully signup'








?>
<?php

$email=$_POST['email'];
$obj= new mysqli('localhost','root','','travel');
$str="INSERT INTO  subscriber (email) values('$email')";
$obj->query($str);
$obj->close();
echo "subscribed succesfully";



?>
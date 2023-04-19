<?php

$email=$_POST['email'];
$number=$_POST['num'];
$obj=new mysqli("localhost","root","","travel");
$str="INSERT INTO whiteheaven values('$email','$number')";
$obj->query($str);
$obj->close();
echo'successfully signup'
?>
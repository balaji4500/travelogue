<?php

$email=$_POST['email'];
$number=$_POST['num'];
$obj=new mysqli("localhost","root","","travel");
$str="INSERT INTO bali values('$email','$number')";
$obj->query($str);
$obj->close();
echo'<Script> alert("your order is booked")</script>'
?>
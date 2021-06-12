<?php 
require_once('connection.php');

// contact form

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$feedback = $_POST["feedback"];

$sql = "insert into contact(name,email,phone,feedback) values('$name','$email','$phone','$feedback')";

if($con->query($sql) === TRUE)
{
    echo "<script type='text/javascript'>alert('Form Successfully Submited');</script>";
    header("refresh:0,url=index.php#contact");
}
$con->close();
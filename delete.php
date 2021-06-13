<?php

require_once('connection.php');

$mail = $_GET['mail'];
$query = "DELETE FROM contact WHERE Email = '$mail'";

$data = mysqli_query($con,$query);

if($data)
{
  echo "<script type='text/javascript'>alert('Feedback deleted');</script>";
  header("refresh:0,url=feedback.php");
}
else
{
  echo"somethiong problem";
}


?>
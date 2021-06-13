<?php

require_once('connection.php');

$id = $_GET['id'];
$query = "DELETE FROM contact WHERE id = '$id'";

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
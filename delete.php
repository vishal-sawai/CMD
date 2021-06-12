<?php

require_once('connection.php');

$mail = $_GET['mail'];
$query = "DELETE FROM contact WHERE Email = '$mail'";

$data = mysqli_query($con,$query);

if($data)
{
    echo"deleted";
}
else
{
  echo"somethiong problem";
}


?>
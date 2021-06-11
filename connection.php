<?php

$con = mysqli_connect('localhost', 'root', '', 'miniproject');

if(!$con) 
{
    die('please check your connection'.mysqli_error($con));
}
?>


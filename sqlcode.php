<?php 
require_once('connection.php');

// feedback page

session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UserName']) || empty($_POST['UserPassword']))
       {
            header("location:admin.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admin where usermail='".$_POST['UserName']."' and userpass='".$_POST['UserPassword']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UserName'];
                header("location:feedback.php");
            }
            else
            {
                header("location:admin.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'error';
    }    

?>
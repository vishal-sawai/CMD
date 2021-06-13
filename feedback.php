<!-- php code -->
<?php

require_once('connection.php');

$query = "select * from contact";
$data = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Feedback</title>
</head>

<body class="feedback-page">

    <!-- navbar -->

    <div class="menu">
        <img class="m-i" src="img/logo.jpg">
        <a href="index.php#home">Home</a>
        <a href="index.php#course">Courses</a>
        <a href="index.php#about">About</a>
        <a href="index.php#contact">Contact</a>
        <div class="menu-right">
            <a href="admin.php">Admin</a>
        </div>
    </div>

 <div class="feed">
    <table class="feedback-table">
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Feedback</th>
        <th>Option</th>



        <?php
        $i = 1;
        while ($rows = mysqli_fetch_assoc($data)) {

        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $rows['Name'] ?></td>
                <td><?php echo $rows['Email'] ?></td>
                <td><?php echo $rows['Phone'] ?></td>
                <td><?php echo $rows['Feedback'] ?></td>               
                <td><a href="delete.php?mail=<?php echo $rows['Email']; ?>">Delete</a></td>


            </tr>
        <?php
            $i++;
        }
        ?>
    </table>
    </div>
<?php


session_start();

if(isset($_SESSION['User']))
{
    // echo ' Well Come ' . $_SESSION['User'].'<br/>';

    echo '<div class="logoutbtn"><a href="logout.php?logout">LogOut</a></div>';
}
else
{
    header("location:admin.php");
}

?>




</body>

</html>
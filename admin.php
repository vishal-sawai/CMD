<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="Adminpage">

    <!-- navbar -->

    <div class="menu">
        <img class="m-i" src="img/logo.jpg">
        <a id="a1" href="index.php#home">Home</a>
        <a href="index.php#course">Courses</a>
        <a href="index.php#about">About</a>
        <a href="index.php#contact">Contact</a>
        <div class="menu-right">
            <a href="admin.php">Admin</a>
        </div>
    </div>

    <!-- LoginPage -->
    <div class="Admin">
        <div class="Login">
            <div class="admin-icon">
                <div class="a-icon">
                    <img class="a-img" src="img/Admin-icon.png">
                </div>
                <div class="a-name">
                    <h1>Admin</h1>
                </div>
            </div>
            <div>
                <h1 class="Admin-heading">Login</h2>
                    <form action="sqlcode.php" method="post">
                        <div class="Admin-input-div">
                            <img class="Admin-input-img" src="img/mail.png">
                            <input class="Admin-input" type="email" name="UserName" placeholder="Email Id">
                        </div>
                        <div class="Admin-input-div">
                            <img class="Admin-input-img" src="img/pass.png">
                            <input class="Admin-input" type="password" name="UserPassword" placeholder="Password">
                        </div>
                        <div class="Admin-button-div">
                            <button class="Admin-button" name="Login">LOGIN</button>
                        </div>
                    </form>
                    <?php
                    if (@$_GET['Empty'] == true) {
                    ?>
                        <div class="aerror"><?php echo $_GET['Empty'] ?></div>
                    <?php
                    }
                    ?>

                    <?php
                    if (@$_GET['Invalid'] == true) {
                    ?>
                        <div class="aerror"><?php echo $_GET['Invalid'] ?></div>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</body>

</html>
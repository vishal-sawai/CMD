<!DOCTYPE html>
<html>

<head>
    <title>CMT</title>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-page">

    <!-- navbar -->
    <section>

        <div id="bg">
            <div class="menu">
                <img class="m-i" src="img/logo.jpg">
                <a id="a1" href="#home">Home</a>
                <a href="#course">Courses</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
                <div class="menu-right">
                    <a href="admin.php">Admin</a>
                </div>
            </div>

            <!-- home -->
            <div id="home">

            </div>

        </div>
        <!-- Quote  -->
        <div class="quote">
            <p class="quote-line">
                The more you learn,The more you earn.<br>
                <span class="quote-name"> – Warren Buffett</span>
            </p>
        </div>
    </section>
    <!-- course -->

    <section id="course" class="section">
        <div class="c-head s-head">
            <h1>Our Courses</h1>
            <hr>
        </div>
        <div class="topic">
            <div class="t">
                <a class="c-link" href="basic_cm.html   ">
                    <div class="t-image t-image1">

                    </div>
                    <div class="t-head">
                        <h2>Basic Of Capital Market </h2>
                    </div>
                </a>
            </div>
            <div class="t">
                <a class="c-link" href="Stock_market.html">
                    <div class="t-image t-image2">

                    </div>
                    <div class="t-head">
                        <h2>Stock Market</h2>
                    </div>
                </a>
            </div>
            <div class="t">
                <a class="c-link" href="Bond_market.html">
                    <div class="t-image t-image3">

                    </div>
                    <div class="t-head">
                        <h2>Bond Market</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="topic topic2">
            <div class="t">
                <a class="c-link" href="Fundamental_an.html">
                    <div class="t-image t-image4">

                    </div>
                    <div class="t-head">
                        <h2>Fundamental Analysis</h2>
                    </div>
                </a>
            </div>
            <div class="t">
                <a class="c-link" href="Mutual_fund.html">
                    <div class="t-image t-image5">

                    </div>
                    <div class="t-head">
                        <h2>Mutual Funds</h2>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- About Us -->

    <div id="about" class="section">
        <div class="a-head s-head">
            <h1>About Us</h1>
            <hr>
        </div>
        <div class="aboutmain-div">
            <div class="about-person naresh">
                <img class="about-img" src="img/img.jpg">
                <div class="second-div"><br>
                    <h2>Naresh Joshi</h2><br>
                    <p>Hello,<br>
                        &#8287 &#8287 &#8287 I'm Naresh Joshi and currently pursuing
                        My degree in BSc.IT from BAMU University
                        I am trainer of capital market

                    </p>
                </div>
            </div>

            <div class="about-person vishal">
                <div class="second-div"><br>
                    <h2>Vishal Sawai</h2><br>
                    <p>Hello,<br>
                        &#8287 &#8287 &#8287 I'm Vishal Sawai and currently pursuing
                        My degree in BSc.IT from BAMU University
                        I like to learn new things about Technology

                    </p>
                </div>
                <img class="about-img" src="img/img.jpg">
            </div>
        </div>
    </div>

    <!-- Contact Us -->

    <div id="contact" class="section">
        <div class="co-head s-head">
            <h1>Contact Us</h1>
            <hr>
        </div>
        <div class="contact-form">
            <div class="f-form">
                <form action="sql.php" method="POST">

                    <label>Name</label><br>
                    <input type="text" name="name" placeholder="Enter Your Name" required /><br>

                    <label>Email</label><br>
                    <input type="email" name="email" placeholder="Enter Your Email" required /><br>

                    <label>Phone No</label><span class="noe"></span><br>
                    <input type="tel" id="n" minlength="10" maxlength="10" name="phone" placeholder="Enter Your Phone Number" required /><br>

                    <label>Feedback</label><br>
                    <textarea placeholder="Feedback" name="feedback" required></textarea><br>

                    <button class="form-btn" name="submit">Submit</button>

                </form>
            </div>

            <div class="c-details">
                <div class="c-info">
                    <div class="c-d">
                        <img src="img/my-address.png">
                        <div class="c-i">
                            <h2>Address</h2>
                            <p>Deogiri College, Usmanpura, Aurangabad, Maharashtra 431005</p>
                        </div>
                    </div>

                    <div class="c-d">
                        <img src="img/my-phone.png">
                        <div class="c-i">
                            <h2>Phone</h2>
                            <p>1234567890</p>
                        </div>
                    </div>

                    <div class="c-d">
                        <img src="img/my-mail.png">
                        <div class="c-i">
                            <h2>Email</h2>
                            <p>cmt123@gmail.com</p>
                        </div>
                    </div>

                    <div class="c-d c-social">
                        <a href="https://www.facebook.com/"><img src="img/facebook.png"></a>
                        <a href="https://www.linkedin.com/"><img src="img/linked-in.png"></a>
                        <a href="https://www.instagram.com/"><img src="img/instagram.png"></a>
                        <a href="https://www.twitter.com/"><img src="img/twitter.png"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <footer>&copy; Copyright 2021 CMT</footer>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            let no;
            $(".form-btn").click(function(ev) {
                no = document.getElementById("n").value;
                if (isNaN(no)) {
                    event.preventDefault();
                    $(".noe").text("*Enter only number");
                } else {
                    $(".noe").text("");
                }
            });
        });
    </script>

</body>

</html>
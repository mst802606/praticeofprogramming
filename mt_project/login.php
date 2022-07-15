<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Fleet Management</title>

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>



</head>

<body>
    <?php include('navbar.php'); ?>

    <?php
    if (isset($_POST['user_login'])) {
        extract($_POST);


        $query = mysqli_query($con, "SELECT * FROM users WHERE name = '$login_user_name' && password = '$login_user_password'");
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['user'] = $login_user_name;
            header("Location: index.php");
        } else {
    ?>
            <script type='text/javascript'>
                alert('Invalid Email or Password');
            </script>
    <?php

        }
    }
    if (isset($_POST['register_user'])) {
        extract($_POST);
        // echo"<h1>$register_user_name</h1>";
        // echo"<h1>$register_user_email</h1>";
        // echo"<h1>$register_user_password</h1>";

        $check_user_name = mysqli_query($con, "SELECT * FROM users WHERE name = '$register_user_name'");
        $check_user_email = mysqli_query($con, "SELECT * FROM users WHERE email = '$register_user_email'");
        if (mysqli_num_rows($check_user_name)>0) {
    ?>
            <script type='text/javascript'>
                alert('This User name is already exist!');
            </script>
    <?php
            # code...
        } else if (mysqli_num_rows($check_user_email)>0) {
    ?>
            <script type='text/javascript'>
                alert('This Email Id is already exist!');
            </script>
    <?php
            # code...
        } else {
            
            $insertquery = "INSERT INTO users (name, email, password) VALUES ('$register_user_name', '$register_user_email', '$register_user_password')";

		    $result = mysqli_query($con, $insertquery);

            if ($result==true) {
    ?>
            <script type='text/javascript'>
                alert("Congratulations! Your account has been created successfuly. Please Sign in");
            </script>
    <?php
                
            }



        }
        
    }


    ?>
    <div class="login">
        <div class="login-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="signin()">Sign In</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
            </div>
            <form id="signin" class="input-group" method="POST">
                <input type="text" name="login_user_name" class="input-field" placeholder="User Name" required>
                <input type="text" name="login_user_password" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" name="user_login" class="submit-btn">Sign In</button>
            </form>

            <form id="signup" class="input-group" method="POST">
                <input type="text" name="register_user_name" class="input-field" placeholder="User Name" required>
                <input type="email" name="register_user_email" class="input-field" placeholder="Email ID" required>
                <input type="text" name="register_user_password" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>Agree to the terms and conditions</span>
                <button type="submit" name="register_user" class="submit-btn">Sign Up</button>
            </form>
        </div>

    </div>

    <script>
        var x = document.getElementById("signin");
        var y = document.getElementById("signup");
        var z = document.getElementById("btn");

        function signup() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";

        }

        function signin() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";

        }
    </script>





    <footer class="footer">
        <div class="container footer_container">
            <div class="footer1">
                <a href="index.php " class="footer_logo">
                    <h4>AFM</h4>
                </a>
                <p>
                Air Fleet comprises a solution-driven team of experts fully able to support your aircraft operations combining extensive experience of managing and overseeing flight operations, training, compliance and records, modifications and certification, engineering & maintenance contracts, spares pool and parts supply agreements, warranty claims, support programmes, refurbishment and modification, tooling and equipment.
                </p>
            </div>
            <div class="footer2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer4">
                <h4>Contact Us</h4>
                <div>
                    <p>+4900 15734957</p>
                    <p>deutschland@deutschlan.com</p>
                </div>
                <ul class="footer_socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer_copyright">
            <small>Copyright &copy; AFM Internationals</small>
        </div>

    </footer>
    <script>
        const menu = document.querySelector(".nav_menu");
        const menuBtn = document.querySelector("#open-menu-btn");
        const closeBtn = document.querySelector("#close-menu-btn");

        menuBtn.addEventListener('click', () => {
            menu.style.display = "flex";
            closeBtn.style.display = "inline-block";
            menuBtn.style.display = "none";
        })

        // Closing Nav Menu//
        const closeNav = () => {
            menu.style.display = "none";
            closeBtn.style.display = "none";
            menuBtn.style.display = "inline-block";
        }
        closeBtn.addEventListener('click', closeNav)
    </script>
</body>

</html>
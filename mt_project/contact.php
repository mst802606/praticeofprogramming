<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Fleet Management</title>

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>



</head>

<body>
    <?php include('navbar.php'); ?>



    <section class="contact">
        <div class="container contact_container">
            <aside class="contact_aside">
                <h2>Contact Us</h2>
                <ul class="contact_details">
                    <li>
                        <i class="uil uil-phone"></i>
                        <small>0123456789</small>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <small>lorem.ipsum@ipsum.com</small>
                    </li>
                    <li>
                        <i class="uil uil-location-pin-alt"></i>
                        <small>Ontario Chicago, Street 12</small>
                    </li>
                </ul>
                <ul class="contact_socials">
                    <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="#"><i class="uil uil-instagram"></i></a></li>
                    <li><a href="#"><i class="uil uil-twitter-alt"></i></a></li>
                    <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>


                </ul>
            </aside>

            <?php
            if (isset($_POST['contact_us'])) {
                extract($_POST);
                // echo"<h1>$first_name</h1>";
                // echo"<h1>$last_name</h1>";
                // echo"<h1>$email_address</h1>";
                // echo"<h1>$message</h1>";

                $user_message = mysqli_query($con, "INSERT INTO contact_us (first_name, last_name, user_email, msg) VALUES('$first_name','$last_name','$email_address','$message') ");
                if ($user_message == true) {
            ?>
                    <script type='text/javascript'>
                        alert('Message send successfully');
                    </script>
            <?php
                }else {
            ?>
                    <script type='text/javascript'>
                        alert('Message not send!');
                    </script>
            <?php
                    
                }
            }

            ?>
            <form method="POST" class="contact_form">
                <?php
                if (!isset($_SESSION['user'])) {
                    echo "<p> You need login to contact us.</p>";
                }

                ?>
                <div class="form_name">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                </div>
                <input type="email" name="email_address" placeholder="Your Email" required>
                <textarea name="message" rows="10" placeholder="Send us your inquiries and questions regarding services we offer....!!" required></textarea>
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <button type="submit" class="btn btn-primary" name="contact_us">Send</button>
                <?php
                }

                ?>

            </form>
        </div>
    </section>











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
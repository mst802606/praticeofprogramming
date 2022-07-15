<?php
session_start();
include("connection.php");

?>

<nav>
    <div class="container nav_container">
        <a href="index.php">
            <h4>Orbital Solutions</h4>
        </a>
        <ul class="nav_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <?php
            if (isset($_SESSION['user'])) {
            ?>
                <li><a href="logout.php">Logout</a></li>
            <?php
            } else {
            ?>
                <li><a href="login.php">Login</a></li>
            <?php
            }

            ?>
        </ul>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
    </div>
</nav>

<script>
    window.addEventListener('scroll', () => {
        document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0)
    })
</script>
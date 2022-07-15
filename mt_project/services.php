<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Fleet Management</title>

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    

</head>
<body>
  <?php include('navbar.php'); ?>

<?php
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}

?>



<section class="services">
    <div class="container services_container">
        <article class="services_name">
            <div class="services_info">
                <h4>Aircraft and engine remarketing</h4>
                <p>Our Extensive global network enables us to cater for our client’s requirements. AirFleet Managers’ specialised team for remarketing of aviation assets, deliver a discreet and targeted service. Our market knowledge and vast database allows us to align the expectations of both the parties to ensure a positive outcome within minimum time.</p>
                </br?> <p>If you want to learn more about it then you can freely ask us!</p>
                <a href="contact.php" class="btn btn-primary">Learn More</a>
                </div>
        </article>
        <article class="services_name">
            <div class="services_info">
                <h4>Pre- Purchase Inspection</h4>
            <p>A thorough pre-purchase inspection is the best investment, as this can reduce potential exposure in the future. At AirFleet Managers, we go above and beyond industry standards, to ensure that our clients have all the information needed to make educated decisions. This is done by conducting a thorough audit of asset in the form of In-Depth Records Review and Detailed Physical Inspection of aircraft, as well as cross verification of both and providing un-biased technical advisory. AirFleet Managers has handled hundreds of pre-purchase inspections on a wide variety of aircraft and to put it simply, we know WHAT TO LOOK FOR.</p>
            </br?> <p>If you want to learn more about it then you can freely ask us!</p>
                <a href="contact.php" class="btn btn-primary">Learn More</a>
            </div>
        </article>
        <article class="services_name">
            <div class="services_info">
                <h4>Aircraft Delivery</h4>
            <p>We specialise in project planning, In-Depth records review and thorough physical inspections to confirm compliance with delivery/redelivery conditions. Our expert team provides customised solutions for different aircraft redelivery processes, worldwide. The service involves complete liaising with Technical Management teams, reporting and resolving non-compliance issues, creating aircraft redelivery binders and coordinating with potential customers as well. We also offer services for on-site EOL Check monitoring, Work-pack compilation and review including verification of Engine and APU Borescope reports.</p>
                </br?> <p>If you want to learn more about it then you can freely ask us!</p>
                <a href="contact.php" class="btn btn-primary">Learn More</a>
            </div>
        </article>
        <article class="services_name">
            <div class="services_info">
                <h4>Aviation Asset Management</h4>
            <p>With its significant management and oversight experience, Air Fleet is a website that is solution-driven and ready to help your aircraft operations. In order to meet the demand of travelers, fleet management comprises purchasing and leasing aircraft. Therefore, the techniques employed to simulate traveler demand are essential since they may have an impact on the reliability and accuracy of the results.</p>
                </br?> <p>If you want to learn more about it then you can freely ask us!</p>
                <a href="contact.php" class="btn btn-primary">Learn More</a>
            </div>
        </article>
        <article class="services_name">
            <div class="services_info">
                <h4>Component Sourcing</h4>
            <p>We offer a full range of aircraft components for sale, lease and exchange. A dedicated technical team is always on work to manage and fulfil your inventory requirements. With our global network of suppliers and repair stations, we work 24/7 to make sure your aircraft keeps flying. Our services also include inventory management, parts procurement, exchange/leasing programs, repair administration and initial provisioning. Please contact us through our contact form and we will be happy to explore and determine how we can assist with your part sourcing requirements.</p>
                </br?> <p>If you want to learn more about it then you can freely ask us!</p>
                <a href="contact.php" class="btn btn-primary">Learn More</a>
            </div>
        </article>
        <article class="services_name">
            <div class="services_info">
                <h4>Aircraft records digitisation and management</h4>
            <p>With our Records Digitisation service, you can keep your records safe and accessible anytime, from anywhere in the world. We specialise in making the data easily accessible in a digital format. With the latest technology and an experienced team, we provide one of the most cost effective solutions for records management. We have our in-house data management system - “AFM Vault”, where you can store the data and access it anytime. This service is FREE for our clients. Our records management services include, Digitisation and Indexing of Hard copies of Aircraft Records, Records Inventory Listing, Technical Review, Records Life Cycle Management, Back to Birth Tracing and reporting of discrepancies.</p>
                </br?> <p>If you want to learn more about it then you can freely ask us!</p>
                <a href="contact.php" class="btn btn-primary">Learn More</a>
            </div>
        </article>
    </div>

</section>




<footer class="footer">
    <div class="container footer_container">
    <div class="footer1">
        <a href="main.html " class="footer_logo"><h4>AFM</h4></a>
        <p>
        Air Fleet comprises a solution-driven team of experts fully able to support your aircraft operations combining extensive experience of managing and overseeing flight operations, training, compliance and records, modifications and certification, engineering & maintenance contracts, spares pool and parts supply agreements, warranty claims, support programmes, refurbishment and modification, tooling and equipment.
        </p>
    </div>
    <div class="footer2">
        <h4>Permalinks</h4>
        <ul class="permalinks">
            <li><a href="main.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.html">Contact Us</a></li>
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
const menu=document.querySelector(".nav_menu");
const menuBtn=document.querySelector("#open-menu-btn");
const closeBtn=document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click', ()=>{
    menu.style.display="flex";
    closeBtn.style.display="inline-block";
    menuBtn.style.display="none";
})

// Closing Nav Menu//
const closeNav=()=>{
    menu.style.display="none";
    closeBtn.style.display="none";
    menuBtn.style.display="inline-block";
}
closeBtn.addEventListener('click', closeNav)
</script>
</body>
</html>
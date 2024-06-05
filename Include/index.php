<?php
session_start();
if(empty($_SESSION['u_id'])) {
  header("Location: login.php");
}
else {
  $session = $_SESSION['u_name'];
}
?>
<!DOCTYPE html>
<html lang="em">
<head>
	<meta charset="utf-8">
	<title>HOME PAGE</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="../java-script/protest0.js" type="text/javascript"></script>
	<link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel="stylesheet" href="Your service.html">
</head>
<body>
	<header>
     <a href="#" class="logo">LOGO</a>
     <ul>
        <li ><a class="active" href="home page.html" > SignIn</a></li>
        <li ><a class="active" href="home page.html" > login</a></li>
     </ul>
     </header>
     <section class="banner">
        <div class="slideshow-item">
            <img src="../pronew.jpg">
            <div class="slideshow-item-text">
            </div>
        </div>
        <div class="slideshow-item">
            <img src="../pro31.jfif">
            <div class="slideshow-item-text">
            </div>
        </div><div class="slideshow-item">
            <img src="../pro40.jfif">
            <div class="slideshow-item-text">
            </div>
        </div>
     </section>
     <div class="RECEIVED" style="margin-top: 100px;">
         <h2><center><strong><a href=""></a></strong></center></h2>
     </div>
     <div class="About">
        <div class="About-p">
         <p style="color: orange; font-size: 16px;">A FEW WORDS</p><br><span></span>
         <h1 style="font-size: 60px; color: #164d6b">About Us</h1><br><br>
         
         <p>The Central Hospital of Yaoundé (In French, Hôpital Central de Yaoundé - HCY) is a hospital in the city of Yaoundé, Cameroon founded in 1933.[1] It is Cameroon’s largest hospital.[2] Simon Pierre Tchoungui (1916-1997), the former prime minister of East Cameroun, was medical superintendent of the hospital in 1960 before being appointed Minister of Health in 1961.</p><br>

<p>Specializing in both traditional murtuary and cremation services, we can help your family plan a meaningful final remembrance. At la caisse hospital mortuary  , we are available to assist families with all aspects of funeral planning. We pride ourselves on the meticulous and personal attention given to every detail, from the moment of first contact with the body.</p><br>

<p>.</p>Each year the hospital conducts over 300 surgeries and assists with thousands of births.[4] The hospital has the busiest trauma center in the city. A study of admission records in 2007 showed a total of 6,274 trauma patients admitted to the emergency ward. Of these, 71% were male, with a mean age of 29 years. 60% of the injuries were from traffic accidents and 22.5% were from assault. Based on the catchment area, this is a high rate of injury.<br>

<p>Affordable, quality and compassionate mortuary and cremation services , We strive to take care of ever corps we recive with a respect, fulfilling  the unique needs of each family.</p></div>
<div class="About-img"><img src="../pro39.jfif"></div>
     </div>
     <div class=service><br><br><br><br><br>
        <img src="pro40.jfif">
         <div class="service-text">
         <center><p style="color: whitesmoke;">TAKE A LOOK AT OUR</p><br><hr>
         <h1 style="font-size: 90px; color:#fff;">Services</h1><br><p style="font-size:18px;">Affordable, quality and compassionate mortuary and cremation services.Our convenient Avenue Germaine location where the mortuary is found.</p></center>
         </div>
         <div class="temp">
         <ul class="service0">
             <li><p><h3>Cremation</h3><br>Simple, direct cremation. Learn more about our cremation options.</p></li>
             <div class="btn-holder"><a href="service.php" class="btn-1">READ MORE</a></div>
             <li><p><h3>Funeral</h3><br>Explore the features this road to final resting place has to offer.</p></li>
             <div class="btn-holder"><a href="service.php" class="btn-1"> READ MORE</a></div>
             <li><p><h3>Fidelity</h3><br> Internal corpse is our priority and family member</p>.</li>
             <div class="btn-holder"><a href="service.html" class="btn-1"> READ MORE</a></div>
         </ul>
     </div>
     </div>
     <div class="container">
     <div class="social">
            <h1>Follow us</h1>
            <div class="sbotton"><div class="sicon">
            <a href="#" style="color:#4267b2; "><i class="fa fa-facebook"></i> </div><span>facebook</span></div></a>
            <div class="sbotton"><div class="sicon">
            <a href="" style="color:#1da1f2; "><i class="fa fa-twitter"></i> </div><span>Twitter</span></div></a>
            <div class="sbotton"><div class="sicon">
            <a href="#" style="color:#e1306c; "><i class="fa fa-instagram"></i> </div><span>Instagram</span></div></a>
            <div class="sbotton"><div class="sicon">
            <a href="#" style="color:#961752ad; "><i class="fa fa-google-plus"></i> </div><span>Google</span></div></a>
          </div>
          <p class="copyright"> &copy; Copyright All rights reserved. </p>
        </div>
     <script type="text/javascript">
     window.addEventListener("scroll",function(){var header=document.querySelector("header");
        header.classList.toggle("sticky",window.scrollY >0)

     })
</script>
</body>
</html>
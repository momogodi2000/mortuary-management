<!DOCTYPE html>
<html>
<head>
	<title>recuitment</title>
	<link rel="stylesheet" type="text/css" href="css/asant.css">
	<link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body >
	<header>
	 <a href="#" class="logo"></a> 
     <ul>
		<li ><a class="active" href="home page.php" > HOME</a></li>
		<li ><a class="active" href="Your service.php">SERVICES</a></li>
		<li ><a href="contact us.php">CONTACT</a></li>
		<li ><a href="corps entrance.php">CORPS ENTRANCE</a></li>
     </ul>
     </header>
	<div id="size" style="padding-top: 100px;">
	   <center class="hd"><h1>RECRUITMENT</h1></center>
	   <h2>Recuitment</h2>
	<p>This are the following recuitment needed to work at our institution below. just take a look at it.</p>
	<ul class="Ful">
		<div style="padding-top: 25px;">
		<li>You should be above 22 years of age.</li>
		<li>Court statement document</li>
		<li>Photocopy of national identity card</li>
		<li>A Recent medical bullet</li>
		<li>Most have obtained advanced level or any equivalent</li>
		<li>The completion of mortuary science educational program is required. </li>
		<li>It is easier if you are licened by the state</li></div>
		<div><img src="morque.jpg"></div>
	</ul>
	
		<h3>Those eligible for the job</h3>
	<ul class="Sul">
			<li>A medical examiner</li>
			<li>An anaphath</li>
			<li>All medical personels</li>
	</ul>
</div>

	<center class="ab" style="background=grey-color: ;"> 
		<div id="size2">
		<h3 style="color: #5f7686;">If you are satisfied with our requirement, Just click on the botton below to register!</h3>
	</div>

		
	<button class="openbtn" onclick="openform()"><b>click here</b></button>
	<div class="popform" id="popupform">
		
		<form class="myform">
			<h2>Recuitment form!</h2>
			<div id="client1">	
				
					<label><h4>First name</h4></label>
				<input type="text" name="name" placeholder="enter first name.." class="input" required><br>

					<label><h4>Level of education</h4></label>
				<select>
					<option>Doctorate</option>
					<option>masters degree</option>
					<option>Bachelor degree</option>
						<option>mortuary science degree</option>
					<option>HND</option>
					<option>A level</option>
					
				</select>

				<p><h4>Gender</h4></p>
				<select>
					<option>Male</option>
					<option>Female</option>
				
				</select>

				<label><h4>Religion</h4></label>
				<input type="text" name="religion" placeholder="enter your religion" class="input" required><br>

				<label><h4>Language</h4></label>
				<select>
					<option>English</option>
					<option>French</option>
					<option>English & French</option>
					<option>Other</option>
				</select>
				
		    </div>

			<div id="client2">
				
					<label><h4>Last name</h4></label>
				<input type="text" name="name" placeholder="enter last name.." class="input" required><br>
		
					<label><h4>Email</h4></label>
				<input type="text" name="mail" placeholder="enter your email.." required class="input"><br>
				  <label><h4>Age</h4></label>
				<input type="text" name="age" placeholder="enter your age.." required class="input"><br>
				   <label><h4>Tel</h4></label>
				<input type="text" name="tel" placeholder="enter your contact.." required class="input"><br><br>
				  <label><h4>Region</h4></label>
				<input type="text" name="region" placeholder="enter your region.." required class="input"><br><br>
			
				<button type="submit" id="subtn">submit</button>
				<button type="button" onclick="closeform()" id="cbtn" >close</button>
			</div>
			
		</form>	
	
		
	</div>
	</div>
	<div class="container">
     <div class="social">
            <h1>Follow us</h1>
            <a href="#"><i class="fa fa-facebook"></i> </a>
            <a href="#"><i class="fa fa-twitter"></i> </a>
            <a href="#"><i class="fa fa-snapchat-ghost"></i> </a>
            <a href="#"><i class="fa fa-instagram"></i> </a>
            <a href="#"><i class="fa fa-google-plus"></i> </a>
          </div>
          <p class="copyright"> &copy; Copyright All rights reserved. </p>
        </div>
</div>
	</center>
	<script type="text/javascript">
			function openform(){
				document.getElementById("popupform").style.display="block";
			}
			function closeform(){
				document.getElementById("popupform").style.display="none";
			}
			
		</script>
</body>
</html>
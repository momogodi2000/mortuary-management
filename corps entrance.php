<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CORPS ENTRANCE</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">
	 <link rel="stylesheet" href="css/style1.css">
</head>

<body>
	<header class="nav">
		<ul>
		   <li ><a class="active" href="home page.php">HOME</a></li>
		   <li ><a class="active" href="recuitment.php">RECRUITMENT</a></li>
		</ul>
	</header>

<div class="container">
	<div class="title">CORPSE INFORMATION</div>
	<form action="booking/booking.php" method="post">
		<div class="user-details">
			<div class="form-group">
				<span class="details">Corp's Full Name</span>
				<input type="text" placeholder="Corp's Full Name" class="form-control" name="C_name" required>
			</div>
			
			<div class="form-group">
				<span class="details">Profession</span>
				<input type="text" placeholder="Enter Profession" class="form-control" required name="Profession">
			</div>
			<div class="form-group">
				<span class="details">Religion</span>
				<input type="text" placeholder="Enter Religion" class="form-control" required name="Religion">
			</div>
			<div class="form-group">
				<span class="details">Familly situation</span>
				<input type="text" placeholder="Enter Marital Status" class="form-control" required name="Marital_status">
			</div>
			<div class="form-group">
				<span class="details">Arrival Date</span>
				<input type="date" placeholder="Enter Arrival Date" class="form-control" required name="A_date">
			</div>
			<div class="form-group">
				<span class="details">Retrivement date</span>
				<input type="date" placeholder="Date of retrivement" required name="Retrievement_date" class="form-control">
			</div>
          <div class="form-group">
				<span class="details">Gender</span>
				<input type="text" placeholder="Enter Gender" class="form-control" required name="Gender">
			</div>
			<div class="form-group">
				<span class="details">Depositor Name</span>
				<input type="text" placeholder="Enter Depositor Name" required name="D_name" class="form-control">
			</div>
			<div class="form-group">
				<span class="details">Depositor Email</span>
				<input type="email" placeholder="Enter Depositor Email" required name="email" class="form-control">
			</div>
			<div class="form-group">
				<span class="details">Relationship</span>
				<input type="text" placeholder="Relation with the death" required name="Relationship_with_deceased" class="form-control">
			</div>
			<div class="form-group">
				<span class="details">Depositor CNI number</span>
				<input type="text" placeholder="Enter CNI number" required name="CNI_number" class="form-control"> 
			</div>
			<div class="form-group">
				<span class="details">Telephone</span>
				<input type="phone" placeholder="Enter telephone number" required name="Telephone" class="form-control">
			</div>
			<div class="button">
				<input type="submit" value="Register" class="btn btn-primary">
			</div>
		</div>	
	</form>
</div>
<script>
	var x=document.getElementById("login");
	var y=document.getElementById("register");
	var z=document.getElementById("btn");

	function register(){
		x.style.left = "-610px";
		y.style.left = "41px";
        z.style.left = "110px";
	}
	function login(){
		y.style.left = "-610px";
		x.style.left = "41px";
        z.style.left = "0px";
	}
</script>
</body>
</html>
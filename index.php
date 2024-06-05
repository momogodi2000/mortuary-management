<?php 
	include('InOut/functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: InOut/login.php');
    }

    // log user out if logout button clicked
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: InOut/login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="InOut/style.css">
</head>
<body>
	<div class="header">
		<h2>User Pannel</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['user_name']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red; text-decoration: none;">logout</a>
                        <a style="color: seagreen; padding-left: 90px; text-decoration: none;" href="home page.php">Proceed to HomePage</a>
					</small>

					<br><br><br>
					<label for="">Account Details</label>
					<hr>
					<br>
					<h5>Corps deposited :<?php ?></h5>
					<h5>Time till corps removal :<?php ?></h5>
					<h5>Info :</h5>
					<br><br><br>
					<hr>
					<h5>Download Receit</h5>
					<br>
					<button class='btn'><a href="download.php?file=SampleFile.pdf" target="Mortuary Receit" style="text-decoration: none" >Get Receit</a></button>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
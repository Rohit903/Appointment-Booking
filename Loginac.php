<!DOCTYPE>
<html>
	<head>
 		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<title>Register</title>
	<style>
		table, th, td {
		border:1px solid black;
		text-align:center;
		}
	</style>
	</head>
	<body style="background: url(img1.jpg) no-repeat; width: 100%; height: 150px; background-size: 100%;">
		<center>
			<h1 style = color:brown><b>Enter The following details to Register<b></h1>
			<form class = "form-group" method="POST">
			<label><b>Username:</b></label>
			<input id ="demo" type = "text" name = "uname" placeholder = "enter username" required/><br>
			<label><b>Password:</b></label>
			<input id = "demo1" type = "password" name = "passwd" placeholder = "enter password" required/><br>
			<label><b>re-Passwd:</b></label>
			<input id = "demo1" type = "password" name = "rpasswd" placeholder = "re-enter password" required/><br>
		<!--	<label><b>Name:</b></label>
			<input id ="demo2" type = "text" name = "name"  placeholder = "enter your name" required/><br>-->
			<label><b>Email:</b></label>
			<input id ="demo3" type = "text" name = "email"  placeholder = "enter your emailid" required/><br>
		<!--	<label><br>Address:</br></label>
			<input id ="demo4" type = "text" name = "email" placeholder = "enter your email_id" required/><br><br>-->
			<button class = "btn" type="submit">Submit</button>
			</form>
			<form action = "/files/Login1.php">
				<input class = "btn-default" type = "submit" value = "Go Back to Login_Page"\>	
			</form>
			<h1>
				<?php
					//$name="";
					//$pass="";

					$submit = $_POST;
					if(isset($_POST['uname'])){
						$name = $_POST['uname'];
					}
					if(isset($_POST['passwd'])){
						$pass = $_POST['passwd'];
						echo $pass;
					}
				/*	if(isset($_POST['name'])){
						$nam = $_POST['name'];
						echo $nam."\n";
					}*/
					if(isset($_POST['email'])){
						$email = $_POST['email'];
					}
					if(isset($_POST['rpasswd'])){
						$rpass = $_POST['rpasswd'];
						echo $rpass."\n`";
					}
					/*if(isset($_POST['address']))
					{
						$addr = $_POST['address'];
					}*/
					if($submit)
					{
						if($pass==$rpass)
						{
							$link = mysqli_connect("localhost:3306","dbadmin","Apassword","Appointment");
							mysqli_query($link,"create table Time$name(Slots varchar(10),Monday int ,Tuesday int,Wednesday int,Thursday int,Friday int,Saturday int ,Sunday int)");
							//mysqli_query($link,"insert into Time$name(Slots) values(9:00AM),(12':00Am'),(3:00PM),(6:00PM)");
							mysqli_query($link,"insert into Time$name(Slots) values('12:30PM'),('3:00PM'),('6:00PM'),('9:00AM')");
							echo "connected";
							if(mysqli_query($link,"insert into Consultant(ConsultantName,Password,E_mail) values('".$name."','".$pass."','".$email."')"))
							{
								echo "User Account created";
							}	
							else
							{
								echo "Error".mysqli_error($link);
							}
						}	
						else
						{
							echo " Please enter correct password";
						}
					$name="";
					$pass="";

					mysqli_close($link);
					}
				?>
			</h1>
		</center>
	</body>
</html>

<!DOCTYPE>
<html>
	<head>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<title>Log_In</title>

	<style>
		table, th, td {
		border:1px solid black;
		text-align:center;
		}
	</style>
	</head>
	<body style="background: url(pho.jpg) no-repeat; width: 100%; height: 150px; background-size: 100%;" >
		<center>

			<h1 style = color:red>Appointment Booking System</h1>
			<form class = "form-group" method="POST">
			<label style= background-color:red ><b>Username:</b></label>
			<input id ="demo" type = "text" name = "uname" placeholder="enter username" required/><br>
			<label style = "background-color:red"><b>Password:</b></label>
			<input id = "demo1" type = "password" name = "passwd" placeholder = "enter password" required/><br><br>
			<button class = "btn" type="submit">Log_In</button>
			</form>
			<form class = "form-group" action="/files/Login2.php">
				<input class = "btn-default" type="submit" value="New Customer?:)"/>
			</form>
			<form class = "form-group" action="/files/Loginc.php">
				<input class = "btn-default" type="submit" value="Consultant Login)"/>
			</form>
			<form class = "form-group" action="/files/Loginac.php">
				<input class = "btn-default" type="submit" value="New Consultant?)"/>
			</form>



			<h1 style=color:green>
				<?php
					$name="";
					//$pass="";
					$count = 0;
					$count1 = 0;
					$submit = $_POST;
					if(isset($_POST['uname']))
					{
						$name = $_POST['uname'];
					//	echo $_POST['uname'];
						echo "\n";
					}
					if(isset($_POST['passwd']))
					{
						$pass = $_POST['passwd'];
					//	echo $_POST['passwd'];
						echo "\n";
					}
					if($submit)
					{
						$link = mysqli_connect("localhost:3306","dbadmin","Apassword","Appointment");
						$result = mysqli_query($link,"select * from Client");
						

						//$row1 = mysqli_fetch_array($result);
					//	echo $row1['ClientName'],$row1['Password'];
						//	while($row = mysqli_fetch_array($result))
					while($row = mysqli_fetch_array($result))	
					{
						//echo "hello";
						echo $row['ClientName'],$row['Password'];
						echo "\n";
					//	echo $name,$pass;
						//echo "Size:".sizeof($row);
						if($name == $row['ClientName'] && $pass == $row['Password'])
						{
							echo " User Logged in Correctly";
							header("Location:/files/Login222.php");
							break;
						}
						else{
							if($count == sizeof($row)-1)
							{
								echo "Username and Password Don't Match";
							}
						}
						$count = $count + 1;
					}
					//echo "dfjalsdfjaldf";
					if($row1 == ""){
							echo "...Username and Password Don't Match...";
					}
					$name="";
					$pass="";

					mysqli_close($link);
					}
					//echo "end";
				?>
			</h1>
		</center>
	</body>
</html>

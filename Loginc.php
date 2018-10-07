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
			<label style= background-color:red ><b>Consultantname:</b></label>
			<input id ="demo" type = "text" name = "uname" placeholder="Enter Name" required/><br>
			<label style = "background-color:red"><b>Password:</b></label>
			<input id = "demo1" type = "password" name = "passwd" placeholder = "Enter Password" required/><br><br>
			<button class = "btn" type="submit">Log_In</button>
			</form>
			<form class = "form-group" action="/files/Login1.php">
				<input class = "btn-default" type="submit" value="go to login page)"/>
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
						$result = mysqli_query($link,"select * from Consultant");
						

						$row1 = mysqli_fetch_array($result);
					//	echo $row1['ClientName'],$row1['Password'];
						//	while($row = mysqli_fetch_array($result))
					while($row = mysqli_fetch_array($result))	
					{
						//echo "hello";
						//echo $row['ConsultantName'],$row['Password'];
						//echo "\n";
					//	echo $name,$pass;
					//	echo "Size:".sizeof($row1);
					//	echo "Size:".sizeof($row);

						if($name == $row['ConsultantName'] && $pass == $row['Password'])
						{
							//echo " User Logged in Correctly";
							$result1 = mysqli_query($link,"select * from Time$name");
							if(mysqli_num_rows($result1) > 0)
							{
							//echo "Usn\tssid\n";
								echo "<style>table,th,td{border:1px solid black}</style>";
								echo '<table style = "width:50">';
								echo"<TR><Th>Slots</Th><Th>Monday</Th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></TR>";
								while($row1 = mysqli_fetch_array($result1))
								{
								//echo $row["class_usn"]."\t".$row["class_sem_ssid"];
								//echo "\r\n";
	
									echo "<tr><td>"; 
									echo $row1['Slots'];
									echo "</td><td>";   
									echo $row1['Monday'];
									echo "</td><td>"; 
									//echo "</td><td>";   
									echo $row1['Tuesday'];
									echo "</td><td>";// echo "</td><td>";   
									echo $row1['Wednesday'];
									echo "</td><td>";// echo "</td><td>";   
									echo $row1['Thursday'];
									echo "</td><td>"; 
									//echo "</td><td>";   
									echo $row1['Friday'];
									echo "</td><td>"; //echo "</td><td>";   
									echo $row1['Saturday'];
									echo "</td><td>"; //echo "</td><td>";   
									echo $row1['Sunday'];
									echo "</td></tr>"; 
									echo "\r\n";
								}
							
								break;
								
							}	
							else 
							{
								echo "0 results";
							}			
							//header("Location:/files/Login333.php");
						//	$count = count - 1;
						}
						else
						{
							if($count == sizeof($row1))
							{
								echo "Username and Password Don't Match";
							}
						}
						
						$count = $count + 1;
					}
					//echo "dfjalsdfjaldf";
					if($msqli_num_rows($result) ==0)
					{
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

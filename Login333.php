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
	</head>""
	<body style="background: url(img1.jpg) no-repeat; width: 100%; height: 150px; background-size: 100%;">
		<center>
			<h1 style = color:brown><b>Enter The following details to Register<b></h1>
			<form class = "form-group" method="POST">
			<!--<label><b>Consultant Name:</b></label>
			<input id ="demo" type = "text" name = "Cname" placeholder = "enter username" required/><br>
			<label><b>TimeSlot:</b></label>
			<input id = "demo1" type = "text" name = "Tslot" placeholder = "enter password" required/><br>
			<label><b>Day:</b></label>
			<input id = "demo1" type = "text" name = "Day" placeholder = "re-enter password" required/><br>
			<label><b>Date:</b></label>
			<input id ="demo2" type = "text" name = "Date"  placeholder = "enter your name" required/><br>
			<label><b>Email:</b><br></br></label>
			<input id = "demo 3" type = "text" name = "address" placeholder = "your city name" required/><br>
			<label><b>Address:</br><br></br></label>
			<input id ="demo 4" type = "text" name = "email" placeholder = "enter your email_id" required/><br><br>
			<button class = "btn" type="submit" name = "submit">Submit</button>
			<button class = "btn" type="submit" name= "book">Book</button>-->
			</form>
			<form action = "/files/Login1.php">
				 <!--<input class = "btn-default" type = "submit" value = "Book" \>-->	
				<input class = "btn-default" type = "submit" value = "Logout"\>	
			</form>
			<h1>
				<?php
					//$name="";
					//$pass="";

					//$submit = $_POST;
					/*$Book =$_POST;
					/*if(isset($_POST['submit'])){
						echo "Submit pressed";
					}
					if(isset($_POST['book'])){
						echo "book presed";
					}*/
					if(isset($_POST['Cname'])){
						$name = $_POST['Cname'];
					}
					/*if(isset($_POST['Tslot'])){
						$Slot = $_POST['Tslot'];
				 	}
					if(isset($_POST['Day'])){
						$Day = $_POST['Day'];
					}
					if(isset($_POST['Date'])){
						$Dat = $_POST['Date'];
					}
					if(isset($_POST['rpasswd'])){
						$rpass = $_POST['rpasswd'];
					}
					if(isset($_POST['address']))
					{
						$addr = $_POST['address'];
					}*/
					
				//	if($submit)
				//	{
					$link = mysqli_connect("localhost:3306","dbadmin","Apassword","Appointment");
				//	$result =mysqli_query($link,"select $Day as Availability from Time where $Day = 1 and Slots = '$Slot'");
					//$result2 =mysqli_query($link,"select ConsultantName from Consultant where ConsultantName = '$name'");
					
				//	$result =mysqli_query($link,"select * from Time where $Day ='$Slot'");
					//while($row = mysqli_fetch_array($result))	
				//	{
				//	$row = mysqli_fetch_array($result);
					//echo $row['Availability'];
					//echo "hello".$row['Availability'];	
					//	if($row !=1)	
				//	$row2 = mysqli_fetch_array($result2);
					$result1 = mysqli_query($link,"select * from Time$name");
					//if($row2['ConsultantName']==$name)
					//{
					//	if($row['Availability'] == 1)
					//	{	
					//		echo "slot not available";
					//		echo " here is the booking statistics you can chech and book accordingly...";
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
		
							}	
							else 
							{
								echo "0 results";
							}						 
								//$temp = 0;
							//}
					/*		else
							{
								echo "slot  available and booked successfully";

								
								$result =mysqli_query($link,"update Time set $Day = 1 where  Slots = '$Slot'");
								$temp = 1;
							}
						}else{
						//echo " Please enter correct password";
					
					$name="";
					$Date="";
					$Day = "";
					$Slot="";

				 
					}
					else
					{
						echo "consultantname not exists".row2[$name];
					}*/
					mysqli_close($link);
					
				/*	if($Book)
					{
					
						$link = mysqli_connect("localhost:3306","dbadmin","Apassword","Appointment");

						$row =mysqli_fetch_array($result);
						echo $row;
						echo "hello world";
						mysqli_close($link);		
					}*/
				?>
			</h1>
		</center>
	</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Assignment1.css" />
<link rel="stylesheet" type="text/css" href="Lab2CSS.css" />
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<style type="text/css"></style>
<title>Ryan's IT 207 Website</title> 
</head> 
<body>
<?php include'header.php';?>
<?php include'footer.inc';?>
<?php include'sideBar.inc';?>
<div id="whole">
	<h1>Office Hour Setup Form</h1>
	<div id="date">Date:</div>
	<div id="day">Monday</div>
	<div id="day">Tuesday</div>
	<div id="day">Wednesday</div>
	<div id="day">Thursday</div>
	<div id="day">Friday</div>

	<form action="Calendar.php" method="POST">
		<div id="body">
			<div id="chooseTime"><b>Choose Time:</b></div>
		<div id="choose">
			<select name= "Monday[]" multiple="multiple" SIZE = "20">
				<option value="7:00am"> 7:00am</option>
				<option value="7:30am"> 7:30am</option>
				<option value="8:00am"> 8:00am</option>
				<option value="8:30am"> 8:30am</option>
				<option value="9:00am"> 9:00am</option>
				<option value="9:30am"> 9:30am</option>
				<option value="10:00am"> 10:00am</option>
				<option value="10:30am"> 10:30am</option>
				<option value="11:00am"> 11:00am</option>
				<option value="11:30am"> 11:30am</option>
				<option value="12:00pm"> 12:00pm</option>
				<option value="12:30pm"> 12:30pm</option>
				<option value="1:00pm"> 1:00pm</option>
				<option value="1:30pm"> 1:30pm</option>
				<option value="2:00pm"> 2:00pm</option>
				<option value="2:30pm"> 2:30pm</option>
				<option value="3:00pm"> 3:00pm</option>
				<option value="3:30pm"> 3:30pm</option>
				<option value="4:00pm"> 4:00pm</option>
				<option value="4:30pm"> 4:30pm</option>
				<option value="5:00pm"> 5:00pm</option>
				<option value="5:30pm"> 5:30pm</option>
				<option value="6:00pm"> 6:00pm</option>
				<option value="6:30pm"> 6:30pm</option>
				<option value="7:00pm"> 7:00pm</option>
				<option value="7:30pm"> 7:30pm</option>
				<option value="8:00pm"> 8:00pm</option>
				<option value="8:30pm"> 8:30pm</option>
				<option value="9:00pm"> 9:00pm</option>
				<option value="9:30pm"> 9:30pm</option>
				<option value="10:00pm"> 10:00pm</option>
			</select>
		</div>
		<div id="choose">
			<select name= "Tuesday[]" multiple="multiple" SIZE = "20">
				<option value="7:00am"> 7:00am</option>
				<option value="7:30am"> 7:30am</option>
				<option value="8:00am"> 8:00am</option>
				<option value="8:30am"> 8:30am</option>
				<option value="9:00am"> 9:00am</option>
				<option value="9:30am"> 9:30am</option>
				<option value="10:00am"> 10:00am</option>
				<option value="10:30am"> 10:30am</option>
				<option value="11:00am"> 11:00am</option>
				<option value="11:30am"> 11:30am</option>
				<option value="12:00pm"> 12:00pm</option>
				<option value="12:30pm"> 12:30pm</option>
				<option value="1:00pm"> 1:00pm</option>
				<option value="1:30pm"> 1:30pm</option>
				<option value="2:00pm"> 2:00pm</option>
				<option value="2:30pm"> 2:30pm</option>
				<option value="3:00pm"> 3:00pm</option>
				<option value="3:30pm"> 3:30pm</option>
				<option value="4:00pm"> 4:00pm</option>
				<option value="4:30pm"> 4:30pm</option>
				<option value="5:00pm"> 5:00pm</option>
				<option value="5:30pm"> 5:30pm</option>
				<option value="6:00pm"> 6:00pm</option>
				<option value="6:30pm"> 6:30pm</option>
				<option value="7:00pm"> 7:00pm</option>
				<option value="7:30pm"> 7:30pm</option>
				<option value="8:00pm"> 8:00pm</option>
				<option value="8:30pm"> 8:30pm</option>
				<option value="9:00pm"> 9:00pm</option>
				<option value="9:30pm"> 9:30pm</option>
				<option value="10:00pm"> 10:00pm</option>
			</select>
		</div>
		<div id="choose">
			<select name= "Wednesday[]" multiple="multiple" SIZE = "20">
				<option value="7:00am"> 7:00am</option>
				<option value="7:30am"> 7:30am</option>
				<option value="8:00am"> 8:00am</option>
				<option value="8:30am"> 8:30am</option>
				<option value="9:00am"> 9:00am</option>
				<option value="9:30am"> 9:30am</option>
				<option value="10:00am"> 10:00am</option>
				<option value="10:30am"> 10:30am</option>
				<option value="11:00am"> 11:00am</option>
				<option value="11:30am"> 11:30am</option>
				<option value="12:00pm"> 12:00pm</option>
				<option value="12:30pm"> 12:30pm</option>
				<option value="1:00pm"> 1:00pm</option>
				<option value="1:30pm"> 1:30pm</option>
				<option value="2:00pm"> 2:00pm</option>
				<option value="2:30pm"> 2:30pm</option>
				<option value="3:00pm"> 3:00pm</option>
				<option value="3:30pm"> 3:30pm</option>
				<option value="4:00pm"> 4:00pm</option>
				<option value="4:30pm"> 4:30pm</option>
				<option value="5:00pm"> 5:00pm</option>
				<option value="5:30pm"> 5:30pm</option>
				<option value="6:00pm"> 6:00pm</option>
				<option value="6:30pm"> 6:30pm</option>
				<option value="7:00pm"> 7:00pm</option>
				<option value="7:30pm"> 7:30pm</option>
				<option value="8:00pm"> 8:00pm</option>
				<option value="8:30pm"> 8:30pm</option>
				<option value="9:00pm"> 9:00pm</option>
				<option value="9:30pm"> 9:30pm</option>
				<option value="10:00pm"> 10:00pm</option>
			</select>
		</div>
		<div id="choose">
			<select name= "Thursday[]" multiple="multiple" SIZE = "20">
				<option value="7:00am"> 7:00am</option>
				<option value="7:30am"> 7:30am</option>
				<option value="8:00am"> 8:00am</option>
				<option value="8:30am"> 8:30am</option>
				<option value="9:00am"> 9:00am</option>
				<option value="9:30am"> 9:30am</option>
				<option value="10:00am"> 10:00am</option>
				<option value="10:30am"> 10:30am</option>
				<option value="11:00am"> 11:00am</option>
				<option value="11:30am"> 11:30am</option>
				<option value="12:00pm"> 12:00pm</option>
				<option value="12:30pm"> 12:30pm</option>
				<option value="1:00pm"> 1:00pm</option>
				<option value="1:30pm"> 1:30pm</option>
				<option value="2:00pm"> 2:00pm</option>
				<option value="2:30pm"> 2:30pm</option>
				<option value="3:00pm"> 3:00pm</option>
				<option value="3:30pm"> 3:30pm</option>
				<option value="4:00pm"> 4:00pm</option>
				<option value="4:30pm"> 4:30pm</option>
				<option value="5:00pm"> 5:00pm</option>
				<option value="5:30pm"> 5:30pm</option>
				<option value="6:00pm"> 6:00pm</option>
				<option value="6:30pm"> 6:30pm</option>
				<option value="7:00pm"> 7:00pm</option>
				<option value="7:30pm"> 7:30pm</option>
				<option value="8:00pm"> 8:00pm</option>
				<option value="8:30pm"> 8:30pm</option>
				<option value="9:00pm"> 9:00pm</option>
				<option value="9:30pm"> 9:30pm</option>
				<option value="10:00pm"> 10:00pm</option>
			</select>
		</div>
		<div id="choose">
			<select name= "Friday[]" multiple="multiple" SIZE = "20">
				<option value="7:00am"> 7:00am</option>
				<option value="7:30am"> 7:30am</option>
				<option value="8:00am"> 8:00am</option>
				<option value="8:30am"> 8:30am</option>
				<option value="9:00am"> 9:00am</option>
				<option value="9:30am"> 9:30am</option>
				<option value="10:00am"> 10:00am</option>
				<option value="10:30am"> 10:30am</option>
				<option value="11:00am"> 11:00am</option>
				<option value="11:30am"> 11:30am</option>
				<option value="12:00pm"> 12:00pm</option>
				<option value="12:30pm"> 12:30pm</option>
				<option value="1:00pm"> 1:00pm</option>
				<option value="1:30pm"> 1:30pm</option>
				<option value="2:00pm"> 2:00pm</option>
				<option value="2:30pm"> 2:30pm</option>
				<option value="3:00pm"> 3:00pm</option>
				<option value="3:30pm"> 3:30pm</option>
				<option value="4:00pm"> 4:00pm</option>
				<option value="4:30pm"> 4:30pm</option>
				<option value="5:00pm"> 5:00pm</option>
				<option value="5:30pm"> 5:30pm</option>
				<option value="6:00pm"> 6:00pm</option>
				<option value="6:30pm"> 6:30pm</option>
				<option value="7:00pm"> 7:00pm</option>
				<option value="7:30pm"> 7:30pm</option>
				<option value="8:00pm"> 8:00pm</option>
				<option value="8:30pm"> 8:30pm</option>
				<option value="9:00pm"> 9:00pm</option>
				<option value="9:30pm"> 9:30pm</option>
				<option value="10:00pm"> 10:00pm</option>
			</select>
		</div>
	</div>
		<div id="button">
			<input type="submit" value="Submit">
			<input type="reset" value="Clear">
		</div>
	</form>
</div>
</body>
</html>

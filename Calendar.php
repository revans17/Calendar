<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Assignment1.css" />
<link rel="stylesheet" type="text/css" href="Lab2CSS.css" />
<title>Ryan's IT 207 Website</title>
</head> 
<body>
<?php include'./header.php';?>
<?php include'./footer.inc';?>
<?php include'./sideBar.inc';?>
<div id="container">
<?php
	if (!(isset($_POST['signUpForm']))) {
		firstRun();
	}else{
		nextRun();
	}
	function firstRun(){
		echo '<form action="./Calendar.php" method="POST">';
		$Monday = get_Time('Monday');
		$Tuesday = get_Time('Tuesday');
		$Wednesday = get_Time('Wednesday');
		$Thursday = get_Time('Thursday');
		$Friday = get_Time('Friday');
		print_Signup_Form();
		print_Header();
		print_Calendar($Monday, $Tuesday, $Wednesday, $Thursday, $Friday);
		hiddenFormsImplode($Monday, $Tuesday, $Wednesday, $Thursday, $Friday);
		echo '</form>';
	}
	function nextRun(){
		echo '<form action="./Calendar.php" method="POST">';
		$m = $_POST['Monday'];
		$t = $_POST['Tuesday'];
		$w = $_POST['Wednesday'];
		$th = $_POST['Thursday'];
		$f = $_POST['Friday'];
		$MondayArray = null;
		if(isset($m)){ $MondayArray = explode(',', $m[0]);}
		$TuesdayArray = null;
		if(isset($t)){ $TuesdayArray = explode(',', $t[0]);}
		$WednesdayArray = null;
		if(isset($w)){ $WednesdayArray = explode(',', $w[0]);}
		$ThursdayArray = null;
		if(isset($th)){ $ThursdayArray = explode(',', $th[0]);}
		$FridayArray = null;
		if(isset($f)){ $FridayArray = explode(',', $f[0]);}
		print_Signup_Form();
		print_Header();
		print_Calendar($MondayArray, $TuesdayArray, $WednesdayArray, $ThursdayArray, $FridayArray);
		hiddenFormsImplode($MondayArray, $TuesdayArray, $WednesdayArray, $ThursdayArray, $FridayArray);
		echo '</form>';
	}
	function print_Calendar($Monday, $Tuesday, $Wednesday, $Thursday, $Friday){
		$days_Of_The_Week = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
		$days_Per_Month = get_Days_Per_Month();
		$first_Day = get_First_Day();
		$empty_Days = get_Empty_Days($first_Day);
		print_Days_In_Week($days_Of_The_Week);
		print_Empty_Days($empty_Days);
		print_Finished_Cal($days_Per_Month, $Monday, $Tuesday, $Wednesday, $Thursday, $Friday, $days_Of_The_Week);
	}
	function hiddenFormsImplode($Monday, $Tuesday, $Wednesday, $Thursday, $Friday){
		if (isset($Monday)) {
			$Monday = implode(",", $Monday);
			echo '<input type = "hidden" name = "Monday[]" value = "'.$Monday.'">' ;
		}
		if (isset($Tuesday)) {
			$Tuesday = implode(",", $Tuesday);
			echo '<input type = "hidden" name = "Tuesday[]" value = "'.$Tuesday.'" >';
		}
		if (isset($Wednesday)) {
			$Wednesday = implode(",", $Wednesday);
			echo '<input type = "hidden" name = "Wednesday[]" value = "'.$Wednesday.'" >';
		}
		if (isset($Thursday)) {
			$Thursday = implode(",", $Thursday);
			echo '<input type = "hidden" name = "Thursday[]" value = "'.$Thursday.'" >';
		}
		if (isset($Friday)) {
			$Friday = implode(",", $Friday);
			echo '<input type = "hidden" name = "Friday[]" value = "'.$Friday.'" >';
		}
	}
	function print_Finished_Cal($days_Per_Month, $Monday, $Tuesday, $Wednesday, $Thursday, $Friday, $days_Of_The_Week){
		if (isset($_POST['signUpForm'])) {
			for ($i=1; $i <= $days_Per_Month; $i++) { 
				$month = date("m");
				$year = date("y");
				echo '<div id="dayOfWeek">'. $i;
				echo '<br/>';
				$day_Of_Week = date("l", mktime(0, 0, 0, $month, $i, $year));
				switch ($day_Of_Week) {
					case "Monday":
						printSubmittedTimes($Monday, $i);
						break;
					case "Tuesday":
						printSubmittedTimes($Tuesday, $i);
						break;
					case "Wednesday":
						printSubmittedTimes($Wednesday, $i);
						break;
					case "Thursday":
						printSubmittedTimes($Thursday, $i);
						break;
					case "Friday":
						printSubmittedTimes($Friday, $i);
					break;
				}
				echo "</div>";
				if ($i % 7 == 0) {
					echo '<div id="row"></div>';
				}
			}
		}else{
			for ($i=1; $i <= $days_Per_Month; $i++) { 
				$month = date("m");
				$year = date("y");
				echo '<div id="dayOfWeek">'. $i;
				$day_Of_Week = date("l", mktime(0, 0, 0, $month, $i, $year));
				switch ($day_Of_Week) {
					case "Monday":
						print_Time("Monday", $i);
						break;
					case "Tuesday":
						print_Time("Tuesday", $i);
						break;
					case "Wednesday":
						print_Time("Wednesday", $i);
						break;
					case "Thursday":
						print_Time("Thursday", $i);
						break;
					case "Friday":
						print_Time("Friday", $i);
						break;
				}
				echo "</div>";
				if ($i % 7 == 0) {
					echo '<div id="row"></div>';
				}
			}				
		}
	}
	function get_Time($value){
		if (isset($_POST[$value])) {
			return $_POST[$value];
		}	
	}
	function printSubmittedTimes($day, $i){
		if (isset($_POST['signUpForm'])) {
			if (isset($day)) {
				foreach($day as $c){
					if($_POST['atime'] == "$i - $c"){
						echo substr($_POST['atime'], 4). " - ". $_POST['name'];
						echo "<br/>";
					}elseif (isset($day)){
						if ($c != null) {
							echo "<input type='radio' value = '$i - $c' name = 'atime'>";
							print($c);
							echo "<br/>";
						}
					}
				}
			}						
		}
	}
	function print_Time($number, $i){
		if(isset($_POST[$number])){
			echo "<br/>";
			if (!(isset($_POST['signUpForm']))) {
				foreach($_POST[$number] as $s){
					echo "<input type='radio' value = '$i - $s' name = 'atime'>";
					print($s);
					echo "<br/>";
				}
			}if (isset($_POST['signUpForm'])) {
				foreach($number as $c){
					if ($_POST['atime'] != $c) {
						echo "<input type='radio' value = '$i - $c' name = 'atime'>";
						print($c);
						echo "<br/>";						
					}else{
						echo '$c. $_POST["name"] ';
						echo "<br/>";
					}
				}
			}
		}
	}
	function print_Empty_Days($empty_Days){
		for($int = 0; $int < $empty_Days; $int++){
			echo'<div id="dayOfWeek"></div>';
		}
	}
	function get_Empty_Days($first_Day){
		switch ($first_Day) {
			case "Sunday":return 0;break;
			case "Monday":return 1;break;
			case "Tuesday":return 2;break;
			case "Wednesday":return 3;break;
			case "Thursday":return 4;break;
			case "Friday":return 5;break;
			case "Saturday":return 6;break;
		}
	}
	function get_Days_Per_Month(){
		$month = date("m");
		$year = date("y");
		$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		return $days;
	}
	function get_First_Day(){
		$month = date("m");
		$year = date("y");
		$date = mktime(0,0,0,$month,1,$year);
		$return = date("l", $date);
		return date("l", $date);
	}
	function print_Header(){
		$month = date("M");
		$year = date("Y");
		echo '<div id = "month">';
		echo '<h1>'. $month.', '. $year. '</h1>';
		echo '</div>';
	}
	function print_Days_In_Week($days_Of_The_Week){
		foreach ($days_Of_The_Week as $days) {
			echo '<div id="dayOfWeek">';
			echo $days; 
		 	echo '</div>';
		}
		echo '<div id="row"></div>';
	}
	function print_Signup_Form(){
		echo '<div id = "signup">';
		echo '<h1>Office Hour Sign Up</h1><br/>';
		echo 'Student Name: <input type = "text" name="name">';
		echo 'Student Email: <input type = "email" name="email">';
		echo '<input type = "submit" name = "enter" value = "enter"> ';
		echo '<input type = "reset" value = "clear">';
		echo '<input type = "hidden" name = "signUpForm" value = "yes">';
		if (isset($_POST['enter'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$headers = "From: ". $email;
			$checkedMail = filter_var($email, FILTER_VALIDATE_EMAIL);
			mail($email, 'Office Hour Sign Up For '. $name, 'hi');
			if (!$checkedMail) {
				echo '   Sorry, this is an invalid email.';
			}else{
				echo "<br/>";
				echo '   Your email has been sent to '. $email;
			}
		}
		echo '</div>';
	}	
?>
</div>
</body>
</html>
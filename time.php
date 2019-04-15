<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "becoming";
$dep = $_POST['dep'];
$course = $_POST['course'];
$day = $_POST['datepicker'];
$startTime = $_POST['start_time'];
$endTime = $_POST['end_time'];
$fullStartTime = $day.' '.$startTime;
$fullEndTime = $day.' '.$endTime;
echo "start time ".$fullStartTime. "<br /> ";
echo "stop time ".$fullEndTime. "<br /> ";
$st_Time = strtotime($fullStartTime);
$en_Time = strtotime($fullEndTime);
$conn = new mysqli($server,$user,$password,$dbname);
if($conn->connect_error){
	echo "unable to connect";
}
	$query = "INSERT IGNORE INTO timetable VALUES ('$dep','$course','$st_Time','$en_Time')";
	$msg = $conn->query($query);

	if(!$msg){
		echo "couldn't complete query";
		}
		//echo date('d M Y - h:i', $st_Time);
 	if($st_Time>$en_Time)
	{ 	echo "<h1>please enter the correct time</h1>" ;
		Header ("Location: timeadmin.php");
	}
	else Header ("Location:timetable.php");
	
	$conn->close();
?>
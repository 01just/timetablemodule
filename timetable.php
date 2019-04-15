<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="time.css" type="text/css" />
</head>
<body>

<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "becoming";
$dep = 'chm';
$conn = new mysqli($server,$user,$password,$dbname);
if($conn->connect_error){
	echo "unable to connect";
}
	$query = "SELECT * FROM timetable ORDER BY startTime ASC";
	$msg = $conn->query($query);

	if(!$msg){
		echo "couldn't complete query";
		} 
		//echo date('d M Y - h:i', $st_Time);
?>
<table>
<tr>
<th>DEPARTMENT</th>
<th>COURSE</th>
<th>START</th>
<th>END</th>
</tr>
<?php while($row = mysqli_fetch_array($msg)){
	$st = explode(" ",date('D d M Y - h:i', $row['startTime']));
	$ed = explode(" ",date('D d M Y - h:i', $row['endTime']));
echo "<tr>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['Course']."</td>";
echo "<td>".date('D d M Y - h:i', $row['startTime'])."</td>";
echo "<td>".date('D d M Y - h:i', $row['endTime'])."</td>";
echo "</tr>"; } ?>
</table>
</body>
</html>
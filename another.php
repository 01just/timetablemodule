<html>
<head>
	<link rel="stylesheet" href="time.css" type="text/css"  />
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
<div class="main">
	<div class="frame">
		<div class="frame_header">
			<div class="date">
				<h2>DATE</h2>
			</div>
			
			<div class="department">
				<div class="dep">
				<h2>DEPARTMENT</h2>
				</div>
			<div class="timee">
				<table id="timee">
				<tr>
					<td>8:00AM</td>
					<td>9:00AM</td>
					<td>10:00AM</td>
					<td>11:00AM</td>
					<td>12:00AM</td>
					<td>1:00PM</td>
					<td>2:00PM</td>
				</table>
			</div>
			</div>
		</div>
		<div class="bod">
		<div class="frame_day">
			<h2>MON</h2>
			<h2>TUE</h2>
			<h2>WED</h2>
			<h2>THUR</h2>
			<h2>FRI</h2>
		</div>
		<div class="frame_main">
			<?php while($row = mysqli_fetch_array($msg)){
				$course = $row['Course'];
				$st = explode(" ",date('D d M Y - h:i', $row['startTime']));
				$ed = explode(" ",date('D d M Y - h:i', $row['endTime'])); 
				$diff = abs((int)$ed[5]- (int)$st[5]) * 100;
			?>
			
			<?php if($st[0]== 'Mon'){ ?>
			<div class="for_mon">
				<svg  height="55" width="100%">
					<g>
					<rect x = "30" width="<?php echo $diff; ?>" height="55" fill="#C0B6B6"/>
			<text x="30" y="40" font-family="Verdana" font-size="40" fill="blue"><?php print $course; ?></text>
					</g>
				</svg>
			</div> <?php } ?>
			<?php if($st[0]== 'Tue'){ ?>
			<div class="for_tue">
				<svg  height="55" width="100%">
					<g>
					<rect x = "30" width="<?php echo $diff; ?>" height="55" fill="#C0B6B6"/>
			<text x="30" y="40" font-family="Verdana" font-size="40" fill="blue"><?php print $course;  ?></text>
					</g>
				</svg>
			</div> <?php } ?>
			<?php if($st[0]== 'Wed'){ ?>
			<div class="for_wed">
				<svg  height="55" width="100%">
					<g>
					<rect x = "30" width="<?php echo $diff; ?>" height="55" fill="#C0B6B6"/>
			<text x="30" y="40" font-family="Verdana" font-size="40" fill="blue"><?php print $course; ?></text>
					</g>
				</svg>
			</div> <?php } ?>
			<?php if($st[0]== 'Thu'){ ?>
			<div class="for_thur">
				<svg  height="55" width="100%">
					<g>
					<rect x = "30" width="<?php echo $diff; ?>" height="55" fill="#C0B6B6"/>
			<text x="30" y="40" font-family="Verdana" font-size="40" fill="blue"><?php print $course; ?></text>
					</g>
				</svg>
			</div> <?php } ?>
			<?php if($st[0]== 'Fri'){ ?>
			<div class="for_fri">
				<svg  height="55" width="100%">
					<g>
					<rect x = "30" width="<?php echo $diff; ?>" height="55" fill="#C0B6B6"/>
			<text x="30" y="40" font-family="Verdana" font-size="40" fill="blue"><?php print $course;  ?></text>
					</g>
				</svg>
			</div> <?php } }?>
			
		</div>
		</div>
	</div>
</div>
<?php
 $conn->close();
 ?>
</body>
</html>
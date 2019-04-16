<html>
<head>
	<link rel="stylesheet" href="time.css" type="text/css"  />
	<!--TO DO
		1.add date picker
		2.add department picker
		3.exam hall option
		4.multiple exams on the same day
		5.-->
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
				<h2>WEEK 1</h2>
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
				$st = explode(" ",date('D d M Y - H:i', $row['startTime']));
				$ed = explode(" ",date('D d M Y - H:i', $row['endTime'])); 
				//if(strpos($st[5],'PM') && !strpos($st[5],'12')){ $st[5] =+ 12; echo $st[5];}
				//if(strpos($ed[5],'PM') && !strpos($ed[5],'12')){ $ed[5] =+ 12;echo "ed".$ed[5];}
				$diff = abs((float)str_replace(':','.',$ed[5])- (float)str_replace(':','.',$st[5])) * 150;
				$start = ((((float)str_replace(':','.',$st[5]))-8) *125)+30;
				//echo (float)str_replace(':','.',$st[5]);
			?>
			
			<?php if($st[0]== 'Mon'){ ?>
			<div class="for_mon">
				<svg  height="55" width="100%">
					<g >
					<rect x = "<?php echo $start; ?>" width="<?php echo $diff; ?>" height="55" fill="#C0B6B6"/>
					<text x="<?php echo $start; ?>" y="40" font-family="Verdana" font-size="40" fill="blue"><?php print $course; ?></text>
					</g>
				</svg>
			</div> <?php } ?>
			<?php if($st[0]== 'Tue'){ ?>
			<div class="for_tue">
				<svg  height="55" width="100%">
					<g>
					<rect x = "<?php echo $start; ?>" width="<?php echo $diff; ?>" height="55" fill="#C0B6B6"/>
					<text x="<?php echo $start; ?>" y="40" font-family="Verdana" font-size="40" fill="blue"><?php print $course;  ?></text>
					</g>
				</svg>
			</div> <?php } ?>
			<?php if($st[0]== 'Wed'){ ?>
			<div class="for_wed">
				<svg  height="55" width="100%">
					<g>
					<rect x = "<?php echo $start; ?>" width="<?php echo $diff; ?>" height="55" fill="#C0B6B6"/>
					<text x="<?php echo $start; ?>" y="40" font-family="Verdana" font-size="40" fill="blue"><?php print $course; ?></text>
					</g>
				</svg>
			</div> <?php } ?>
			<?php if($st[0]== 'Thu'){ ?>
			<div class="for_thur">
				<svg  height="55" width="100%">
					<g>
					<rect x = "<?php echo $start; ?>" width="<?php echo $diff; ?>" height="55" fill="#C0B6B6"/>
					<text x="<?php echo $start; ?>" y="40" font-family="Verdana" font-size="40" fill="blue"><?php print $course; ?></text>
					</g>
				</svg>
			</div> <?php } ?>
			<?php if($st[0]== 'Fri'){ ?>
			<div class="for_fri">
				<svg  height="55" width="100%">
					<g>
					<rect x = "<?php echo $start; ?>" width="<?php echo $diff; ?>" height="55" fill="#C0B6B6"/>
			<text x="<?php echo $start; ?>" y="40" font-family="Verdana" font-size="40" fill="blue"><?php print $course;  ?></text>
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
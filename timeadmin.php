<!DOCTYPE hmtl>
<html>
<head>
<link rel="stylesheet" href="time.css" type="text/css"  />

</head>
<body>
<form action="time.php" method="post">
<div class="selector">
<select id="department" name="dep" class="dropdown" onClick = "changeview()"> </select>
<select id="course" name="course" class="dropdown"></select>
<input type="text" id="datepicker" name="datepicker" autocomplete="off"/>
<select id="start_time" name="start_time" class="dropdown"></select>
<select id="end_time" name="end_time" class="dropdown"></select>


<input type = "submit"  id="sub" />
</div>
</form>
<button onClick="alert($(#datepicker).value)">Click</button>
</body>
<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="time.js" type="text/javascript" ></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
   $(function() {
   $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });
 });
  </script>
</html>

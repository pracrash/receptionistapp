<?php
$now = time();
$date = date("d-m-Y", $now);
$year = date("Y", $now);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Client Tracker</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/style.css" media="screen" />
	<script type="text/JavaScript" language="javascript" src="validation/login.js"></script>
</head>
<body>
<div id="header">
	<div id="logo">
		<h1>Client Tracker</h1>
	</div>
	<!-- end #logo -->
	<div id="menu">
	<div class="date"><?php echo "$date"; ?>&nbsp;&nbsp;&nbsp;</div>
	</div>
	<!-- end #menu -->
</div>
<!-- end #header -->
<div id="page">
	<div id="content">
		<div class="post">
			<h2 class="title">Please login here to enter the system</h2>
			<p class="byline"><small>&nbsp;&nbsp;</small></p>
			<div class="entry"><center>
				<form action="login.php" method="post" name="form1" onsubmit="MM_validateForm('username','','R','password','','R');return document.MM_returnValue">
				<br />
				<label>Username</label>
				<input name="username" type="text" />
				<br /><br />
				<label>Password</label>&nbsp;
				<input name="password" type="password" /><br /><br />
				<input name="submit" type="submit" value="Login" />
				</form></center>
			</div>
			<div class="meta">
								
			</div>
		</div>
	</div>
	<!-- end #content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
<div id="footer">
	<p>&copy; <?=$year?>. All Rights Reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>

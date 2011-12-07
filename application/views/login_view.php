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
	<div class="date"><?php echo date("d-m-Y", time());?></div>
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
				<?php
					// If any error occurs display here...
					echo '<div class="errormsg"></div>';
					// Display login form
					echo form_open('login/logincheck');
					echo '<label>Username:</label>';
					echo form_input('username',set_value('username'));
					echo '<br /><br />';
					echo '<label>Password:</label>';
					echo form_password('password',set_value('password'));
					echo '<br /><br />';
					echo  form_submit('submit','Login');
									
				?></center>
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
	<p>&copy; <?php echo date("Y", time());?>. All Rights Reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>

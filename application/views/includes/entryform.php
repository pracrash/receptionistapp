<h2 class="title">Please fill all the fields. Note all fields are compulsory.</h2><br />
<div class="entry">
	<form name="form1" action="entry.php" method="post">
		<label class='label'>Full Name:</label>
		<input name="name" type="text" size="30"/><br /><br />
		<label class='label'>Address:</label>
		<input name="address" type="text" size="30"/><br /><br />
		<label class='label'>Phone:</label>
		<input name="phone" type="text" size="30"/><br /><br />
		<label class='label'>Visiting Department:</label>
		<select name="department">
			<option>System</option>
			<option>Support</option>
			<option>Marketing</option>
			<option>Customer relation</option>
			<option>Software</option>
		</select><br /><br />
		<label class='label'>Visiting Personnel</label>
		<select name="visitingpersonnel">
			<option>Kabindra Shrestha</option>
			<option>Peshal Singh Oli</option>
			<option>Yadava Aryal</option>
			<option>Nawaraj Giri</option>
		</select><br /><br />
		<label class='label'>Visiting Purpose</label>
		<select name="visitingpurpose">
			<option>Marketing support</option>
			<option>Advertise</option>
			<option>Proposal</option>
			<option>Others</option>
		</select><br /><br />
		<label class='label'>Knew Company by:</label>
		<select name="media">
			<option>Newspaper</option>
			<option>TV</option>
			<option>Radio</option>
			<option>Internet</option>
			<option>Others</option>
		</select><br /><br />
		<label class='label'>Remarks:</label>
		<input name="remarks" type="text" size="30"/><br /><br />
		<input name="submit" type="submit" value="Submit" />&nbsp;&nbsp;&nbsp;
		<input name="reset" type="reset" value="Reset" />
	</form>
</div>

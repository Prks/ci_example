<h1>Add new Customer</h1>
<FORM action="<?php echo site_url('customer/add_customers'); ?>" method="POST">
<TABLE>
	<TR><TD>Firstname</TD><TD><input type="text" name="fn" placeholder="Write your fname" required="" /></TD></TR>
	<TR><TD>Lastname</TD><TD><input type="text" name="ln"/></TD></TR>
	<TR><TD></TD><TD><input type="submit" name="btnSave" value="Save"/></TD></TR>
</TABLE>
</FORM>

<?php
if (isset($test)) {
	if ($test)
		echo 'Data Inserted';
	else 
		echo 'Something went wrong';
}
?>
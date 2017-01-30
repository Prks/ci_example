<h1>Update Customers</h1>
<FORM method="POST" action="<?php echo site_url('customer/do_update_customers'); ?>">
<TABLE>
	<TR><TH>Firstname</TH><TH>Lastname</TH></TR>
	<?php
	foreach ($customers as $row) {
		echo '<input type="hidden" name=id[] value="'.$row['id_customers'].'"/>';
		echo '<tr><td><input type="text" name="fn[]" value="';
			echo $row['fname'];
			echo '"/></td>';
		echo '<td><input type="text" name="ln[]" value="';
			echo $row['lname'];
			echo '"/></td></tr>';
	}
	?>
	<tr><td></td><td><input type="submit" name="btnSave" value="Save"/></td>
</TABLE>
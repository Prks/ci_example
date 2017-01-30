<h1>Delete Customers</h1>
<TABLE BORDER="1">
	<TR><TH>Firstname</TH><TH>Lastname</TH><TH>Delete selected</TH></TR>
	<?php
	foreach ($customers as $row) {
		echo '<tr><td>'.$row['fname'].'</td>';
		echo '<td>'.$row['lname'].'</td>';
		echo '<td>';
		echo '<a href="'.site_url('customer/remove_customer').'/'.
		$row['id_customers'].'"><button>Delete</button></a>';
		echo '</td></tr>';
	}
	?>
</TABLE>

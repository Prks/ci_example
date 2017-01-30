<h1>Customers</h1>
<TABLE BORDER="1">
	<TR><TH>Firstname</TH><TH>Lastname</TH></TR>
	<?php
	foreach ($customers as $row) {
		echo '<tr><td>'.$row['fname'].'</td>';
		echo '<td>'.$row['lname'].'</td></tr>';
	}
	?>
</TABLE>

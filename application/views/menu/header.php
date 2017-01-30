<!DOCTYPE html>
<html>
<head>
<title>Ci example</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/mystyle.css');?>">
</head>
<body>

<h1>This is the CodeIgniter Example</h1>
<ul>
	<li><a href="<?php echo site_url('main') ?>">Main Page</a></li>
	<li><a href="<?php echo site_url('customer/show_customers');?>">Show Customers</a></li>
	<li><a href="<?php echo site_url('customer/add_customers');?>">Add a Customer</a></li>
	<li><a href="<?php echo site_url('customer/delete_customers');?>">Delete a Customer</a></li>
	<li><a href="<?php echo site_url('customer/update_customers');?>">Update Customers</a></li>
</ul>


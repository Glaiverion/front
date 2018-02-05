<?php
header('Content-type: text/xml');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$status = 0;

if ($username == '10112304' && $password == 'wisudaunikom')
	$status = 1;
?>
<response>
	<status><?php echo $status; ?></status>
	<loginDate><?php echo date('Y-m-d h:i:s'); ?></loginDate>
</response>
<?php
	$conn = mysql_connect('localhost','root','');
	mysql_select_db('Test',$conn);
	foreach($_POST['cName'] as $cnt => $qty) {

		$sql = "INSERT INTO Hello (Hello) VALUES ('".$_POST['cName'][$cnt]."');";
		$result=mysql_query($sql,$conn) or die(mysql_error());

	}	
?>

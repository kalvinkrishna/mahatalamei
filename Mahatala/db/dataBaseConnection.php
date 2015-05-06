<?php
	
	$hostName='localhost';
	
	$userName='root';
	$databasePassword='180195';
	$databaseName='mahatalaprofile';
		$cont=mysql_connect($hostName,$userName,$databasePassword);
	
		$databaseselection=mysql_select_db($databaseName,$cont);
		

?>
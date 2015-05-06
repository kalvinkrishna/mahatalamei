<?php
	$kode=$_POST["kodes"];
	$NamaJobs=$_POST["Names"];
	$DeskJob=$_POST["DeskJb"];
	$logo=$_POST["Logo"];

	$sql="INSERT INTO `mahatalaprofile`.`mahatalajobs` (`IDjobs`, `Kode`, `NamaJobs`, `DeskripsiJob`, `Logo`) VALUES (NULL,$kode,$NamaJobs,$DeskJob,$logo)";
	mysql_query($sql) or die (mysql_error());
?>
<?php
	include "../../db/dataBaseConnection.php";
	if(isset($_POST["IDtarget"])){
		$sql = "DELETE FROM `mahatalaprofile`.`orderqueue` WHERE `orderqueue`.`IDqueu` = '".$_POST["IDtarget"]."'";
		mysql_query($sql) or die(mysql_error());
	}
	
	if(isset($_POST["remove"])){
		$sql=mysql_query("DELETE FROM projectdata WHERE IDsdata='".$_POST["remove"]."'") or die(mysql_error());
		

	}
?>
<?php

    include "../../db/dataBaseConnection.php";
    //insert testimoni data diambil dari Mahatala.php
	if(isset($_POST["testimoniPos"])){
		$name=$_POST['name'];
		$status=$_POST['jabatan'];
		$img=$_POST['img'];
		$ID=$_POST['IDproject'];
		$testimon=$_POST['testimon'];
		
		$sql = "INSERT INTO `mahatalaprofile`.`testimoni` (`IDtestimon`, `User`, `UserDeskripsion`, `imageUser`, `Title`, `Testimon`, `Filter`, `TanggalTestimoni`) VALUES (DEFAULT,'$name','$status','$img',$ID,'$testimon',DEFAULT,DEFAULT);";
		mysql_query($sql) or mysql_error();
		if(mysql_error()){
			echo "gagal";
		}
		else{
			echo "berhasil";
			 $sql=mysql_query("SELECT * FROM testimoni INNER JOIN project ON project.IDproject=testimoni.Title ORDER BY `TanggalTestimoni` DESC") or die(mysql_error());
			 
		}
	}
	if(isset($_POST["valone"]) && isset($_POST["valtwo"])){
		$sql = "INSERT INTO `mahatalaprofile`.`mahatalajobsdata` (`IDjobdata`, `IDjobs`, `Nama`, `StartForm`, `Booming`) VALUES (NULL,'".$_POST["IDjobs"]."','".$_POST["valone"]."','".$_POST["valtwo"]."', DEFAULT);";
		mysql_query($sql) or die(mysql_error());
	}
	//insert order data diambil dari OrderProject.php
	if(isset($_POST["Order"])){
		echo "hai";
		$sql=mysql_query("SELECT NamaClient FROM client WHERE NamaClient='".$_POST["satu"]."'") or die (mysql_error());
		
		$num = mysql_num_rows($sql);

		if($num<=0){
			$sql="INSERT INTO `mahatalaprofile`.`client` (`IDclient`, `NamaClient`, `DeksripsiClients`, `Email`,`NomerTelpn`) VALUES (NULL,'".$_POST["satu"]."','".$_POST["dua"]."','".$_POST["empat"]."', '".$_POST["tiga"]."')";
			mysql_query($sql) or die(mysql_error());
		}

		$sql = "INSERT INTO `mahatalaprofile`.`orderqueue` (`IDqueu`, `Customer`, `NamaJob`, `DeskripsitJob`,`JenisJob`, `Date`, `Accept`) VALUES (NULL,'".$_POST["satu"]."','".$_POST["enam"]."', '".$_POST["lima"]."','".$_POST["jenis"]."', DEFAULT, 'not accept')";
		mysql_query($sql) or die(mysql_error());

		if(mysql_error()){
			echo "gagal";
		}
		else{
			echo "berhasil";
		}		
	}

	if(isset($_POST["keterangan"])){
		$sql = "INSERT INTO `mahatalaprofile`.`keteranganjobs` (`IDs`, `IDjobsdata`, `List`) VALUES (NULL,'".$_POST["idjob"]."', '".$_POST["values"]."')";
		mysql_query($sql) or die(mysql_error());
		if(mysql_error()){

		}
		else{
			echo $_POST["values"];
		}
	}

	if(isset($_POST["accept"])){

		$sql=mysql_query("SELECT orderqueue.Customer,orderqueue.DeskripsitJob,orderqueue.NamaJob,orderqueue.JenisJob,orderqueue.Date FROM orderqueue WHERE IDqueu='".$_POST["ID"]."'");

		$result=mysql_fetch_array($sql);

		$sql = "INSERT INTO `mahatalaprofile`.`project` (`IDproject`, `Client`, `NamaProject`, `DeskripsionClient`, `Location`, `JenisJob`, `Status`, `ACCEPTED`, `Date`, `Cover`) VALUES (NULL,'".$result["Customer"]."','".$result["NamaJob"]."','".$result["DeskripsitJob"]."',NULL,'".$_POST["IDjob"]."', 'BELUM SELESAI','Accept', DEFAULT, DEFAULT)";
		mysql_query($sql);
		if(mysql_error()){
			echo "GAGAL";
		}
		else{
			$sql = "UPDATE `mahatalaprofile`.`orderqueue` SET `Accept` = 'accept' WHERE `orderqueue`.`IDqueu` ='".$_POST["ID"]."'";
			mysql_query($sql);
			echo "Berhasil";
		}
	}

	if(isset($_POST["GaleryFoto"])){
		$Banner="../../Client/Bio/".$_FILES["image"]["name"];
		$file=$_FILES['image']['name'];
		move_uploaded_file($_FILES["image"]["tmp_name"], $Banner);

		$sql = "INSERT INTO `mahatalaprofile`.`projectdata` (`IDsdata`, `IDproject`, `image`) VALUES (NULL,'".$_POST["ID"]."','$file')";
		mysql_query($sql) or die(mysql_error());	
	}

	

?>
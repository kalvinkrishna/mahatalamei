<?php

    include "../../db/dataBaseConnection.php";
	if(isset($_POST["updateTask"])){
		unset($_POST["updateTask"]);
		 return UpdateTask($_POST["option"],$_POST["IDproject"],$_POST["set"]);
	}	
	if(isset($_POST["updateFilter"])){
		unset($_POST["updateFilter"]);
		return UpdateTestimon($_POST["IDproject"],$_POST["set"]);
	}

	if(isset($_FILES['image'])){
		$Banner="../../Client/Bio/".$_FILES["image"]["name"];
		$file=$_FILES['image']['name'];
		move_uploaded_file($_FILES["image"]["tmp_name"], $Banner);

		$sql="UPDATE project SET Cover='$file' WHERE IDproject='".$_POST['jobs']."'";
		mysql_query($sql) or die(mysql_error());
		if(mysql_error()){
			echo "gagal";
		}
		else{
			echo "berhasil";
		}
	}
	if(isset($_POST["upl"]) && isset($_FILES["image_data"])){
		$Banner="../../Client/Bio/".$_FILES["image_data"]["name"];
		$sql=mysql_query("UPDATE mahanet SET IMG='".$_FILES['image_data']['name']."' WHERE ID=1") or die(mysql_error());
		move_uploaded_file($_FILES["image_data"]["tmp_name"],$Banner);
	}

	if(isset($_POST["udata"])){
		$sql=mysql_query("UPDATE mahanet SET CompanyName='".$_POST["Compname"]."',CompanyProf='".$_POST["compprof"]."',Kota='Yogyakarta',Alamat='Jl. Kepuhsari No. 39C RT 007/RW OO5 Maguwoharjo'") or die(mysql_error());
	}

	if(isset($_POST["yesanswer"])){
		$sql = "UPDATE `mahatalaprofile`.`mahatalajobsdata` SET `Booming` = '1' WHERE `mahatalajobsdata`.`IDjobdata` ='".$_POST["booming"]."'";
		mysql_query($sql) or die(mysql_error());
		echo "hai";
	}
	else if(isset($_POST["noanswer"])){
		$sql = "UPDATE `mahatalaprofile`.`mahatalajobsdata` SET `Booming` = '0' WHERE `mahatalajobsdata`.`IDjobdata` ='".$_POST["booming"]."'";
		mysql_query($sql) or die(mysql_error());
		echo "hais";
	}


	if(isset($_POST["target"])){
		$Banner="../../Client/Bio/".$_FILES["targetdata"]["name"];
		$sql = "UPDATE `mahatalaprofile`.`mahatalajobs` SET `".$_POST["target"]."`='".$_FILES["targetdata"]['name']."' WHERE `mahatalajobs`.`IDjobs` ='".$_POST["IDjobe"]."' ";
		mysql_query($sql) or die(mysql_error());
		move_uploaded_file($_FILES["targetdata"]["tmp_name"],$Banner);
	}

	function UpdateTestimon($id,$filter){
		$sql = "UPDATE testimoni SET Filter = '$filter', Barumasuk='0' WHERE IDtestimon = $id";
		mysql_query($sql) or die(mysql_error());
		
	}
	function UpdateTask($option,$Idproject,$set)
	{
		$sql = "UPDATE project SET $option = '$set' WHERE IDproject = $Idproject";
		mysql_query($sql) or die(mysql_error());
	}

	if(isset($_POST["ubah"])){
		echo"yes";
		$sql = "UPDATE mahatalajobs SET DeskripsiJob ='".$_POST["datas"]."' WHERE IDjobs ='".$_POST["ids"]."'";
		mysql_query($sql) or die(mysql_error());
	}
?>
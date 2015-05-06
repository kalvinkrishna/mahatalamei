<?php

    include "../../db/dataBaseConnection.php";
    session_start();

    if(isset($_SESSION["idku"])){
        echo "<h1>".$_SESSION["idku"]."</h1>";
        $sql=mysql_query("UPDATE project SET Date='2015-08-05 00:00:00' WHERE IDproject='".$_SESSION["idku"]."'") or die(mysql_error());
       // unset($_SESSION["idku"]);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mahatala Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/taskclose.css">
   

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="../../index.php">Dash Board</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="Profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="setting.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="Task.php"><i class="fa fa-fw fa-dashboard"></i> Task</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Task<small> Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

               <?php include 'submenu.php';

                if(isset($_SESSION["idku"])){
                    $date= date('Y-m-d H:i:s');
                   
                    $sql=mysql_query("UPDATE project SET Date='".$date."' WHERE IDproject='".$_SESSION["idku"]."'") or die(mysql_error());
                    unset($_SESSION["idku"]);
                }
                
                
               ?>
           

                <div class='row'>

                    <div class='col-sm-12'>
                         <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class='panel-title'><a href='Task.php'>Mahatala Task </a>
                                        <?php
                                        if(isset($_GET["jobs"])){
                                            echo"<span>&#187</span> <a href=Task.php?jobs=".$_GET["jobs"].">";
                                            $sql="SELECT project.NamaProject FROM project WHERE IDproject='".$_GET["jobs"]."'";
                                            $result=mysql_fetch_array(mysql_query($sql));
                                            echo $result["NamaProject"];
                                        }
                                        ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class='col-sm-12'>
                                    <div class="col-lg-12">
                                        <div id='Galery' class='row'>
                                            <?php
                                                if(isset($_GET["jobs"])){
                                                    $query=mysql_query("SELECT project.Client,project.NamaProject,project.DeskripsionClient,project.Cover FROM project WHERE IDproject='".$_GET["jobs"]."'") or die(mysql_error());
                                                    $result=mysql_fetch_array($query);
                                                    echo"
                                                    <div class='col-md-5'>
                                                        <img src='../../Client/Bio/".$result["Cover"]."' class='img-responsive'></img>
                                                        <br>
                                                        <button id='selengkapnya' data-factor='".$_GET["jobs"]."' type='button' class='btn btn-primary btn-md'>Selengkapnya</button>
                                                    </div>

                                                    <div class='col-md-7'>
                                                            <h3>".$result["Client"]." <small>".$result["NamaProject"]."</small></h3>
                                                            <p class='text-justify output'>".$result["DeskripsionClient"]."</p>
                                                    </div>
                                                    ";
                                                }
                                            ?>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $("#selengkapnya").click(function(){
                                                        $id=$(this).attr("data-factor");
                                                        $(this).parent().parent().hide();
                                                        
                                                        $.ajax({
                                                            method:"POST",
                                                            url:"Select.php",
                                                            data:{
                                                                jobs:$id
                                                            },
                                                            success:function(result){

                                                                $("#Galery").show();
                                                                $("#Galery").html(result);
                                                            }

                                                        });
                                                    });
                                                });

                                            </script>
                                           
                                        </div>
                        <?php
                       

                        if(isset($_GET["jobs"]))
                             echo"<ol class='breadcrumb' style='display:none;'>";
                         else
                             echo"<ol class='breadcrumb' style='display:visible;'>";
                        echo"
                          <li><a href='#' data-target='2'>Software Developtment</a></li>
                          <li><a href='#' data-target='3'>Networking Solution</a></li>
                          <li><a href='#'  data-target='1'>Web Desain</a></li>
                          <li><a href='#' data-target='4'>Electronic Device Pronoucement</a></li>
                        </ol>";
                        ?>
                          
                       <?php
                           
                            if(isset($_GET["jobs"])){
                              echo"<div class='table-responsive' style='display:none;'>";
                            }
                            else{
                              echo"<div class='table-responsive'>";  
                            }
                        ?>

                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Client</th>
                                        <th>Nama Job</th>
                                        <th>DeskripsiJob</th>
                                        <th>Jenis Job</th>
                                        <th>Estimasi-Waktu Until</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <?php
                                    $sql=mysql_query("SELECT * FROM mahatalajobs") or die(mysql_error());
                                  

                                ?>
                                <tbody>
                                    <?php
                                        if(!isset($_GET["lim"]) || $_GET["lim"]==1)
                                            $page=$_GET["lim"]=0;

                                        else{
                                            $page=6*($_GET["lim"]-1)+1;
                                        }
                                    ?>
                                    <?php
                                        $query=mysql_query("SELECT * FROM project INNER JOIN mahatalajobs ON project.JenisJob=mahatalajobs.IDjobs WHERE ACCEPTED='ACCEPT' ORDER BY `project`.`Status` DESC")or die(mysql_error());
                                        $number=(mysql_num_rows($query)/6);
                                        $x=1;
                                        $sql = mysql_query("SELECT * FROM project INNER JOIN mahatalajobs ON project.JenisJob=mahatalajobs.IDjobs WHERE ACCEPTED='ACCEPT' ORDER BY `project`.`Status` DESC") or die(mysql_error());
                                        while($result=mysql_fetch_array($sql)){
                                           
                                           if(isset($_SESSION["newUpdate"]) && $_SESSION["newUpdate"]==$result["IDproject"]){
                                            echo" <tr class='filt ".$result['IDjobs']."' style='background-color:#94c8ed;'>";
                                           }
                                           else{
                                            echo" <tr class='filt ".$result['IDjobs']."'>";
                                           }
                                           echo"
                                                    <td>".$x++."</td>
                                                    <td>".$result["Client"]."</td>
                                                    <td><a style='cursor:pointer;' href='Task.php?jobs=".$result["IDproject"]."'>".$result["NamaProject"]."</a><br><div>Edit Disini</div></td>
                                                    <td class='text-justify output'>".substr($result["DeskripsionClient"],0,150)." <span>...</span></td>
                                                    <td>".$result["NamaJobs"]."</t>
                                                    <td>".date('M/Y',strtotime($result["Date"]))."</td>
                                                ";
                                                if($result["Status"]==="SELESAI")
                                                    echo"<td><button id='".$result["IDproject"]."' type='button' class='btnchecks btn btn-success' title='Click Untuk BatalRealease'>Finish</button></td>";
                                                else
                                                    echo"<td><button id='".$result["IDproject"]."' type='button' class='btnchecks btn btn-danger' title='Click Untuk Realease'>Not Finish</button></td>";
                                                echo"
                                                </tr> 
                                            ";
                                        }
                                    ?>
                                    <style>
                                        .activation{
                                            background-color: #87a198;
                                        }

                                    </style>
                                                                  
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $success=false;

                                            $(".breadcrumb li a").click(function(){
                                                $(".breadcrumb li").removeClass("activation");
                                                var value=$(this).attr("data-target");
                                                $(".filt").fadeOut(100);
                                                $("."+value).fadeIn(100);
                                                $(this).parent().addClass("activation");
                                            });

                                            $(".btnchecks").bind('click',function(){
                                                //Update Task Status
                                                //Finish Or Not Finish
                                                if($(this).hasClass("btn-danger")){
                                                    //ajax update info
                                                    var $this = $(this);
                                                    $idproject=$(this).attr('id');
                                                    $.ajax({
                                                        method: "POST",
                                                        url:"Update.php",
                                                        context:this,
                                                        data:
                                                        {
                                                            updateTask:true,
                                                            option:"Status",
                                                            set:"SELESAI",
                                                            IDproject:$idproject
                                                        },
                                                        success:function(result){
                                                        $this.removeClass("btn-danger");
                                                        $this.addClass("btn-success");
                                                        $this.html("Realease"); 
                                                        $this.attr("title","Batal Realease");    
                                                        }
                                                    });
                                                }
                                                else{
                                                        //ajax update info
                                                    $idproject=$(this).attr('id');
                                                    var $this = $(this);
                                                    $.ajax({
                                                        method: "POST",
                                                        url:"Update.php",
                                                        contex:this,
                                                        data:
                                                        {
                                                            updateTask:true,
                                                            option:"Status",
                                                            set:"BELUM SELESAI",
                                                            IDproject:$idproject
                                                        },
                                                        success:function(result){
                                                        $this.removeClass("btn-success");
                                                        $this.addClass("btn-danger");
                                                        $this.html("Belum Realease");
                                                        $this.attr("title","Realease");                                                   
                                                        }
                                                    });
                                                }
                                            });

                                        });
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </div>

                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

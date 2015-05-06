<?php

    include "../../db/dataBaseConnection.php";
    if(!isset($_GET["jobs"])||!isset($_GET["lim"])){
        $_GET["jobs"]=1;$_GET["lim"]=1;
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

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
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
                            Dashboard <small>Statistics Overview</small>
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
                <?php include 'submenu.php';?>
                
                <!-- /.row -->
                <div class='row'>
                     <div class="col-sm-3">
                        <div class="list-group">
                            <h4 class="list-group-item-heading">JOB LIST</h4>
                            
                            <?php
                                include "List.php";
                            ?>
                          
                           
                        </div>
                    </div>   

                     <div class="col-lg-6">
                        <link rel="stylesheet" type="text/css" href="css/Admin.css">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <h3>List Job</h3>
                                <thead>
                                    <tr>
                                        <th>Client</th>
                                        <th>Project</th>
                                        <th>Project Deskripsion</th>
                                        <th>DeadLine</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(!isset($_GET["lim"]) || $_GET["lim"]==1)
                                            $page=$_GET["lim"]=0;

                                        else{
                                            $page=6*($_GET["lim"]-1)+1;
                                        }
                                    ?>
                                    <?php
                                        $query=mysql_query("SELECT * FROM project WHERE JenisJob='".$_GET["jobs"]."'");
                                        $number=mysql_num_rows($query)/6;
                                        
                                        $sql = mysql_query("SELECT * FROM project WHERE ACCEPTED='ACCEPT' AND JenisJob='".$_GET["jobs"]."' LIMIT $page,6 ") or die(mysql_error());
                                        while($result=mysql_fetch_array($sql)){
                                           
                                            echo"
                                                 <tr>
                                                  
                                                    <td>".$result["Client"]."</td>
                                                    <td><a>".$result["NamaProject"]."</a></td>
                                                    <td><a href='Task.php'>Detail</a></td>
                                                    <td>".date('M/Y',strtotime($result["Date"]))."</td>
                                                ";
                                                if($result["Status"]==="SELESAI")
                                                    echo"<td><button type='button' class='btn btn-success'>FINISH</button></td>";
                                                else
                                                    echo"<td><button type='button' class='btn btn-danger'>NOT FINISH</button></td>";
                                                echo"
                                                </tr> 
                                            ";
                                        }
                                    ?>
                                                                  
                                 
                                </tbody>
                            </table>
                        </div>

                        <section class='paddingleft30'>
                        <nav class='paddingleft30'>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                         
                            <style type="text/css">
                                 .activesr{
                                                background-color: #ff0036 !important;
                                                border-color: #ff0036 !important;
                                 }  
                            </style>
                            
                            <?php
                                for($i=1;$i<=$number+1;$i++){
                                    if($i==$_GET["lim"]){
                                        echo"
                                        <li class='active'><a href='index.php?lim=$i&jobs=".$_GET["jobs"]."'>$i</a></li>
                                    ";}
                                    else{
                                    echo"
                                        <li><a href='index.php?lim=$i&jobs=".$_GET["jobs"]."'>$i</a></li>
                                    ";
                                    }
                                }
                            ?>
                            
                            
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                        </section>  

                    </div>

                    <div class='col-xs-3'>
                             <img class="img-thumbnail" src="../../img/works/1.jpg" alt="">
                             <section class='paddingleft30'>
                        <nav class='paddingleft30'>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                         
                               
                            <li><a href='#'>1</a></li>
                            <li><a href='#'>2</a></li>
                            <li><a href='#'>3</a></li>
                            <li><a href='#'>4</a></li>
                            <li><a href='#'>5</a></li>
                            
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                        </section>  
                    </div>
                </div>  

                <div class='row'>
                    <div class='col-sm-12'>
                         <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><a href='Testimoni.php'>Testimoni Filter Good</a></h3>
                            </div>
                            <div class="panel-body">
                                <div class='col-sm-12'>
                                    <div class="col-lg-12">
                                      <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama User</th>
                                                    <th>User Deskripsion</th>
                                                    <th>Foto</th>
                                                    <th>Testimoni</th>
                                                    <th>Testimoni Project</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $sql=mysql_query("SELECT * FROM testimoni INNER JOIN project ON project.IDproject=testimoni.Title WHERE Filter='Diizinkan'") or die(mysql_error());
                                            ?>
                                            <tbody>
                                                
                                                    <?php
                                                    
                                                    while($result=mysql_fetch_assoc($sql))
                                                    {
                                                        echo"
                                                        <tr>
                                                            <td id=User'".$result["IDtestimon"]."'>".$result["User"]."</td>
                                                            <td>".$result["UserDeskripsion"]."</td>
                                                            <td><img src='../../img/".$result["imageUser"]."'></img></td>
                                                            <td>".$result["Testimon"]."</td>
                                                            <td><center>".$result["NamaProject"]."</center></t>
                                                            <td>".$result["TanggalTestimoni"]."</t>
                                                        </tr>";
                                                    }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>                            
                                    </div>
                                </div>
                            </div>
                             <div class="panel-heading">
                                <h3 class="panel-title"><a href='Testimoni.php'>Testimoni Filter Bad</a></h3>
                            </div>
                            <div class="panel-body">
                                <div class='col-sm-12'>
                                    <div class="col-lg-12">
                                      <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama User</th>
                                                    <th>User Deskripsion</th>
                                                    <th>Foto</th>
                                                    <th>Testimoni</th>
                                                    <th>Testimoni Project</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $sql=mysql_query("SELECT * FROM testimoni INNER JOIN project ON project.IDproject=testimoni.Title WHERE Filter='Tidak Diizinkan'") or die(mysql_error());
                                            ?>
                                            <tbody>
                                                
                                                    <?php
                                                    
                                                    while($result=mysql_fetch_assoc($sql))
                                                    {
                                                        echo"
                                                        <tr>
                                                            <td id=User'".$result["IDtestimon"]."'>".$result["User"]."</td>
                                                            <td>".$result["UserDeskripsion"]."</td>
                                                            <td><img src='../../img/".$result["imageUser"]."'></img></td>
                                                            <td>".$result["Testimon"]."</td>
                                                            <td class='text-justify output'>".$result["NamaProject"]."</t>
                                                            <td>".date("M/Y h:m",strtotime($result["TanggalTestimoni"]))."</t>
                                                        </tr>";
                                                    }
                                                    ?>
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

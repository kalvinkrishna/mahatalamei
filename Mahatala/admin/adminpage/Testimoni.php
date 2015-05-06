<?php

    include "../../db/dataBaseConnection.php";
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
        <script src="js/jquery.js"></script>
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
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
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
                        <a href="Testimoni.php"><i class="fa fa-fw fa-dashboard"></i>Testimoni</a>
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
                            Testimoni <small> Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
          </div>

                <!-- /.row -->
                <?php include 'submenu.php';?>
           

                <div class='row'>
                    <div class='col-sm-12'>
                         <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Mahatala Jobs</h3>
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
                                        <th>Filter</th>
                                        
                                    </tr>
                                </thead>
                                <?php
                                    $sql=mysql_query("SELECT * FROM testimoni INNER JOIN project ON project.IDproject=testimoni.Title ORDER BY `TanggalTestimoni` DESC") or die(mysql_error());
                                  

                                ?>
                                <tbody id='ListTesmo'>
                                    
                                        <?php
                                        
                                          while($result=mysql_fetch_assoc($sql))
                                          {
                                            if($result["Barumasuk"]==1) echo "<tr style='background-color:#41AAC4;color:#2F343A; font-weight:900;'>";
                                            else echo "<tr>";
                                                echo"
                                                    <td id=User'".$result["IDtestimon"]."'>".$result["User"]."</td>
                                                    <td>".$result["UserDeskripsion"]."</td>
                                                    <td><img src=../../img/".$result["imageUser"]." style='width:30px; height:30px;'></img></td>
                                                    <td>".$result["Testimon"]."</td>
                                                    <td>".$result["NamaProject"]."</t>
                                                    <td>".date('M Y h:i',strtotime($result["TanggalTestimoni"]))."</t>
                                                    <td>
                                                    <select class='filtering'>
                                                            ";
                                                            if($result["Filter"]==="Diizinkan"){
                                                                echo"
                                                                <option data-testimon='".$result["IDtestimon"]."' value='Diizinkan' selected>IzinKan</option>
                                                                <option data-testimon='".$result["IDtestimon"]."' value='Tidak Diizinkan'>Tidak Diizinkan</option>";
                                                            }
                                                            else{
                                                                echo"
                                                                <option data-testimon='".$result["IDtestimon"]."' value='Diizinkan'>IzinKan</option>
                                                                <option data-testimon='".$result["IDtestimon"]."' value='Tidak Diizinkan' selected>Tidak Diizinkan</option>";
                                                            }
                                                            echo"
                                                    </select>
                                                </td>
                                            </tr>";
                                            }
                                        ?>
                                        <script type="text/javascript">
                                               
                                                $(document).ready(function(){
                                                    function doFilter(){
                                                        $childdata=$(this).find('option:selected').attr('data-testimon');
                                                        $childdatavalue=$(this).find('option:selected').val();
                                                        
                                                        $.ajax({
                                                            method: "POST",
                                                            url:"Update.php",
                                                            data:
                                                            {
                                                                updateFilter:true,
                                                                set:$childdatavalue,
                                                                IDproject:$childdata
                                                            },
                                                            success:function(result){
                                                                 window.location.href = "Testimoni.php";
                                                            }
                                                        })
                                                    }
                                                    $("select").change(doFilter);
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

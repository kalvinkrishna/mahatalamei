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

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script src="js/jquery.js"></script>

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
           
            <link rel="stylesheet" type="text/css" href="css/imageAjaxupload.css">
            <script type="text/javascript" src='js/ajaxupload.js'></script>
            <div class='row'>
                    <div id='admin' class='col-md-12'>
                        
            <?php
            $sql =mysql_query("SELECT * FROM mahanet");
            $result=mysql_fetch_array($sql);
            echo"
            <section class='col-md-5' style='height:100%;'>
                <img src='../../Client/Bio/".$result["IMG"]."' class='upload-click' style='height:100%; padding-bottom:50px; width:100%;' id='sorc'>
                <div class='upload-image'><img src='ajax-loader.gif' width='16' height='16'></div>
                <input type='file' id='input-file-upload' />
            </section>
            <section class='col-md-7'>
            <h2 id='Comname' class='contect'>".$result["CompanyName"]."</h2>
            <h5 class='small'>".$result["IZIN"]."</h5>
            <h8><u><i class='fa fa-road'><span id='alamat' class='contect'>".$result["Kota"]."-".$result["Alamat"]."</span></i></u></h8><br><br>

            <p id='Test' class='text-justify output' style='font-size:18px; font-weight:500;'>
                ".$result["CompanyProf"]."
            </p>
            <div>
                <i class='fa fa-phone'>&nbsp<span id='Nomerkantor' class='contect' style='font-size:10px;'>".$result["NomerTelpon"]."</span></i>&nbsp&nbsp<i class='fa fa-envelope-o'>&nbsp<span id='Email' class='contect' style='font-size:10px;'>".$result["Email"]."</span></i>
            </div>
            <div>
                <i class='fa fa-phone'>&nbsp<span id='BBM' class='contect' style='font-size:12px;'>".$result["BBM"]."</span></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class='fa fa-mobile-phone'>&nbsp<span id='phones' class='contect' style='font-size:12px;'>".$result["Handphone"]."(Call/SMS/Whatsapp)</span></i>   
            </div>
            <div id='submit' class='fullwidth' style='display:none;'>
            <br>
                <button  class='btn btn-primary btn-md'>Submit</button>
            </div>
            </section>";
            ?>
        </div>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<textarea id="TestimonArea" class="form-control" rows="3" placeholder="Testimoni"></textarea>
    <!-- jQuery -->


    <script type="text/javascript">
        
            $("#admin p").click(function(){
                $(this).replaceWith("<textarea id='Comprof' class='form-control text-justify input' rows='14'>"+$(this).html()+"</textarea>");
            });
           
            $(".contect").click(function(){
                $(this).replaceWith("<input id='"+$(this).attr("id")+"' type='text' value='"+$(this).text()+"'></input>");
            });
            $("#admin").children().click(function(){
                $("#submit").show();
                

            });
            $("#submit").click(function(){
                var mdata = new FormData();
                mdata.append("udata",true);
                mdata.append("Compname",$("#Comname").val());
                mdata.append("alamat",$("#alamat").val());
                mdata.append("compprof",$("#Comprof").val());

                $.ajax({
                    method:"POST",
                    url:"Update.php",
                    contentType: false,
                    processData: false,
                    data:mdata,
                    success:function(result){
                       window.location.href = "Profile.php";
                    }
                });

            });

        </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

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
           

                <div class='row'>
                    <div class='col-sm-12'>
                         <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><a href='setting.php'>Mahatala Jobs</a>
                                    /
                                    <?php
                                        if(isset($_GET["setov"])){
                                            if($_GET["setov"]==1){
                                                echo "<a>Web Desain</a>";
                                            }
                                            else if($_GET["setov"]==2){

                                                echo "<a>Software Developtment</a>";
                                            }
                                            else if($_GET["setov"]==3){

                                                echo "<a>Networking Solution</a>";
                                            }
                                            else{

                                                echo "<a>Electronic Device Procunument</a>";
                                            }
                                        }
                                    ?>
                                    <?php
                                    if(isset($_GET["setov"]))
                                        echo"<i class='tong fa fa-plus pull-right' data-target='tongsis' ></i>";

                                    ?>
                                </h3>

                                <form class="tongsis form-horizontal" style='margin-top:30px; display:none;'>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Skill</label>
                                    <div class="col-sm-10">
                                      <input id='valone' type="text" class="form-control" id="inputEmail3" placeholder="Software Pengembangan Badan">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Start Form</label>
                                    <div class="col-sm-10">
                                      <input id='valtwo' type="text" class="form-control" id="inputPassword3" placeholder="$1000">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <?php
                                        echo"
                                            <button type='button' class='confrims btn btn-default' data-me='".$_GET["setov"]."'>ADD SKILL</button>";
                                      ?>
                                    </div>
                                  </div>
                                </form>
                            </div>

                            <div class="panel-body">
                                <div class='col-sm-12'>
                                    <div class="col-lg-12">             
                        <?php
                           
                            if(isset($_GET["setov"])){
                                $sql=mysql_query("SELECT mahatalajobs.SampleImage,mahatalajobs.SampleImage2,mahatalajobs.SampleImage3 FROM mahatalajobs WHERE IDjobs='".$_GET["setov"]."'");
                                $result=mysql_fetch_assoc($sql);
                            echo"<div class='col-md-12' style='margin-bottom:50px;' data-induk='".$_GET["setov"]."'>
                                    <div class='col-md-4' data-sample='SampleImage'>
                                        <img id='img1' class='imaging' src='../../Client/Bio/".$result["SampleImage"]."' style='height:250px; width:250px;'></img>
                                        <input class='inputs' data-ids='foto1' type='file'></input>
                                    </div>
                                    <div class='col-md-4' data-sample='SampleImage2'>
                                    <img id='img2' class='imaging' src='../../Client/Bio/".$result["SampleImage2"]."' style='height:250px; width:250px;'></img>
                                    <input class='inputs' data-ids='foto2' type='file'></input>
                                    </div>
                                    <div id='img3' data-sample='SampleImage3' class='col-md-4'>
                                    <img  class='imaging' src='../../Client/Bio/".$result["SampleImage3"]."'  style='height:250px; width:250px;'></img>
                                    <input  class='inputs' data-ids='foto3' type='file'></input>
                                    </div>

                                </div>

                                                       
                            ";
                                echo"
                                <div class='row'>

                                    <h2 class='text-center' style='padding-top:100px;'>Daftar Keahlian</h2>
                                </div>
                                    <br>
                                      <div class='col-md-12'>
                                      <div class='table-responsive'>
                                        <table class='table table-hover table-striped'>
                                            <thead>
                                                <tr>
                                                    <th>Nomer</th>
                                                    <th>Nama</th>
                                                    <th>Start Form</th>
                                                    <th colspan='2' style='text-align:center;'>Booming</th>
                                                                      
                                                </tr>
                                            </thead>
                                                  <tbody>
                                ";

                                    $sql=mysql_query("SELECT * FROM mahatalajobsdata WHERE IDjobs='".$_GET["setov"]."'");
                                    $xe=1;
                                    while($result=mysql_fetch_array($sql)){
                                        echo"
                                              
                                                            <tr data-tags='".$result["IDjobdata"]."'>
                                                                <td>".$xe++."</td>

                                                                <td><a class='tong' style='cursor:pointer;' data-target='".$xe."'>".$result["Nama"]."</a></td>

                                                                <td>".$result["StartForm"]."</td>
                                                                ";
                                                                if($result["Booming"]){
                                                                echo"
                                                                    <td class='text-center'><button type='button' disabled class='btny btn btn-primary btn-md'>Yes</button></td>
                                                                    <td class='text-center'><button type='button' class=' btnNo btn btn-primary btn-md'>No</button></td>
                                                                ";
                                                                }
                                                                else{
                                                                     echo"
                                                                    <td class='text-center'><button type='button' class='btny btn btn-primary btn-md'>Yes</button></td>
                                                                    <td class='text-center'><button data-ats='oi oi' disabled type='button' class='btnNo btn btn-primary btn-md'>No</button></td>
                                                                     ";
                                                                }
                                    $sqls=mysql_query("SELECT * FROM keteranganjobs WHERE IDjobsdata='".$result["IDjobdata"]."'");
                                    
                                        echo"</tr>

                                           <tr class='".$xe."' style='display:none;'>
                                                <td colspan='5' style='padding-left:100px;' data-tags='".$result["IDjobdata"]."'>  
                                                <a class='tambahs' style='padding-left:10px; cursor:pointer;'><i class='fa fa-plus'>Tambah</i></a>
                                                <br>
                                                ";

                                            echo"<ul class='col-md-4'>";
                                                while($resulte=mysql_fetch_array($sqls)){
                                                        echo "<li>".$resulte["List"]."</li>";
                                                }
                                            echo"</ul>";
                                            
                                        echo"                
                                                </td>   
                                           </tr>
                                        ";
                                    
                                }

                                    echo"
                                            </tbody>

                                        </table>
                                        </div>
                                </div>     
                                ";

                            }
                        ?>   

                        <script type="text/javascript">

                            var inp;
                            $(".inputs").on("change",function(){ 
                                var induk=$(this).parent().parent().attr("data-induk");
                                var sample=$(this).parent().attr("data-sample");
                                //alert(induk);
                                inp=$(this);
                                readURL(this,sample,induk);
                            });

                            $(".confrims").on('click',function(){
                                var valone=$("#valone").val();
                                var valtwo=$("#valtwo").val();
                                var er=$(this).attr("data-me");
                                if(valone&&valtwo!=''){
                                    $.ajax({
                                        method:"POST",
                                        url:"Insert.php",
                                        data:{
                                            IDjobs:er,
                                            valone:valone,
                                            valtwo:valtwo
                                        },
                                        success:function(result){
                                          

                                           window.location.href='setting.php?setov='+er;
                                        }
                                    });
                                }
                            });

                             function readURL(input,sample,induk) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                   
                                    var formData = new FormData();
                                   //formData.append('image', 'Chris');
                                    formData.append('IDjobe',induk);
                                    formData.append('targetdata',input.files[0]);
                                    formData.append('target',sample);

                                    reader.onload = function (e) {
                                       // console.log(e.target.result);                 

                                        $(inp).parent().find(".imaging").attr('src', e.target.result);
                                        
                                        $.ajax({
                                          method:"POST",
                                          url:"Update.php",
                                          contentType: false,
                                          processData: false,
                                          data:formData,
                                          success:function(result){
                                            alert(result);
                                          }
                                        });
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                       
                            $(document).ready(function(){
                                $(".tong").click(function(){
                                    $("."+$(this).attr("data-target")).slideToggle(500);
                                });
                                $(".tambahs").click(function(){
                                    var parent=$(this).parent(),
                                    child=parent.find("ul");
                                    child.append("<li class='itemtambah'><input class='inputen' type='text'></input></li>");
                                });

                                $(".btnNo").click(function(){
                                var val=$(this).parent().parent().attr("data-tags");
                                var trys=$(this).parent().parent().find(".btny");
                                var game=$(this);
                                
                                    $.ajax({
                                        method:"POST",
                                        url:"Update.php",
                                        context:{
                                            game:game,
                                            trys:trys,
                                        },
                                        data:{
                                            noanswer:true,
                                            booming:val
                                        },
                                        success:function(result){
                                            trys.prop('disabled',false)
                                            game.prop('disabled',true);
                                            
                                        }
                                   });
                                });
                                $(".btny").click(function(){
                                var val=$(this).parent().parent().attr("data-tags");
                                var trys=$(this).parent().parent().find(".btnNo");
                                var game=$(this);
                                    $.ajax({
                                        method:"POST",
                                        url:"Update.php",
                                        context:{
                                            game:game,
                                            trys:trys,
                                        },
                                        data:{
                                            yesanswer:true,
                                            booming:val
                                        },
                                        success:function(result){
                                            trys.prop('disabled',false)
                                            game.prop('disabled',true);
                                            
                                        }
                                   });
                                });
                                        
                            });
                            $(document).on('keypress','.inputen',function(e){
                                var lo=$(this);
                                if(e.keyCode==13){
                                    alert($(this).parent().parent().parent().attr("data-tags"));
                                    $.ajax({
                                      method:"POST",
                                      url:"Insert.php",
                                      context:lo,
                                      data:{
                                        keterangan:true,
                                        values:$(this).val(),
                                        idjob:$(this).parent().parent().parent().attr("data-tags")
                                      },
                                      success:function(result){
                                        lo.parent().replaceWith('<li>'+result+'</li>');
                                      }  
                                    });
                                }
                            });
                        </script>      
                        <?php
                            if(isset($_GET["setov"]))
                                echo"<div class='table-responsive' style='display:none;'>";
                            else
                                echo  " <div class='table-responsive'>";
                        ?>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama Job</th>
                                        <th>DeskripsiJob</th>
                                        <th>Logo</th>
                                        <th>Edit</th>
                                        
                                    </tr>
                                </thead>
                                <?php
                                    $sql=mysql_query("SELECT * FROM mahatalajobs") or die(mysql_error());
                                  

                                ?>
                                <tbody>
                                    
                                        <?php
                                          while($result=mysql_fetch_assoc($sql))

                                            {
                                                echo"
                                                <tr>
                                                <td>".$result["Kode"]."</td>
                                                <td>".$result["NamaJobs"]."</td>
                                                <td data-Idjobs=".$result["IDjobs"]."><p class='Trsy text-justify output profdisk' style='cursor:pointer;'>".$result["DeskripsiJob"]."</p></td>
                                                <td class='fa ".$result["Logo"]."'></td>
                                                <td><a href='setting.php?setov=".$result["IDjobs"]."'><button type='button' class='btn btn-primary btn-sm edited'><i class='fa fa-gear'></i></button></a></td>
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

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".profdisk").click(function(){
             
                var s=$(this).html();
                $(this).replaceWith("<textarea class='profdisk form-control text-justify input' rows='14'>"+s+"</textarea>");
           });
            $(document).on('keypress','.profdisk',function(e){
                var change=$(this);
                var lo=$(this).val();
                var id=$(this).parent().attr("data-Idjobs");

                if(e.keyCode==13){
                   
                   $.ajax({
                    method:"POST",
                    url:"Update.php",
                    context:change,
                    data:{
                       ubah:true,
                       datas:lo,
                       ids:id
                    },
                    success:function(result){
                        change.replaceWith("<p class='text-justify output'>"+lo+"</p>");
                    } 
                });
              }
            });
        });
    </script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

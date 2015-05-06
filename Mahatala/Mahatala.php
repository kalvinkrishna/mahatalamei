<?php

	include "db/dataBaseConnection.php";
?>
<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/Mahanet.css">


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="_include/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link href="_include/css/main.css" rel="stylesheet">
	<!-- Supersized -->
	<link href="_include/css/supersized.css" rel="stylesheet">
	<link href="_include/css/supersized.shutter.css" rel="stylesheet">
	<!-- FancyBox -->
	<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<!-- Font Icons -->
	<link href="_include/css/fonts.css" rel="stylesheet">
	<!-- Shortcodes -->
	<link href="_include/css/shortcodes.css" rel="stylesheet">
	<!-- Responsive -->
	<link href="_include/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/tinyscrollbar.css">
	<!-- Supersized -->
	<link href="_include/css/supersized.css" rel="stylesheet">
	<link href="_include/css/supersized.shutter.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.custom.css" />
	<link rel="stylesheet" type="text/css" href="css/custom.css" />

	<script type="text/javascript" src='js/jquery-1.10.2.js'></script>
    <script type="text/javascript" src='js/jquery.typetype.min.js'></script>
	<!-- Google Font -->

	<!--Pricing-->
	<script src="js/jquery.nicescroll.min.js"></script>


<script>
  $(document).ready(function() {
  
    var nicesx = $("body").niceScroll({touchbehavior:true,cursorwidth:8});
    
  });
  
</script>
	
	<!-- Modernizr -->
   	<script src="_include/js/modernizr.js"></script>


	<script src="js/modernizr.custom.js"></script>


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<div id='alertList' class='col-md-12'>
		<div class="alert alert-success warning DeActiveJob" role="alert">Data Berhasil Diupdate <i class='fa fa-close' style='float:right; padding-top:2px;'></i></div>
		<div class="alert alert-info DeActiveJob" role="alert">Menunggu Pesetujuan Admin<i class='fa fa-close' style='float:right; padding-top:2px;'></i></div>
		<div class="alert alert-warning DeActiveJob" role="alert">Oops Terjadi Kesalahan Silakan Hubungi Admin<i class='fa fa-close' style='float:right; padding-top:2px;'></i></div>
		<div class="alert alert-danger DeActiveJob" role="alert">Tidak Berhasil Melakukan perubahan<i class='fa fa-close' style='float:right; padding-top:2px;'></i></div>
	</div>


	<div class='mahacontainer'>
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	        <div>
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <i class="fa fa-bars"></i>
	                </button>
	                
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="fullwidth collapse navbar-collapse navbar-main-collapse">
			      <ul id='MenuAtas' class="fullwidth nav navbar-nav thumb-nav">
			        <li class="active" data-container='intro'><a href="#intro"><i class='fa fa-home'>Home</i></a></li>
					<li data-container='service' id='sevnav'><a href="#service">Service</a></li>
					<li data-container='work'><a href="#work">Project</a></li>
					<li data-container='price'><a href="#price">Price</a></li>
					<li data-container='about'><a href="#about">About</a></li>
					<li data-container='offer'><a href="#scope">SCOPE</a></li>
					<li data-container='Testimoni'><a href="#Testimon">Testimoni</a></li>
			      </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
   		 </nav>

   		 <!--Slider Begin -->


<section id="intro" class="intro fullwidth homing">
	<center>
	
			<div class="slogan" style='color:#FFFFFF; width:50%; position:relative;'>
				
				<h1 id='WelcomeHai' style='margin-top:10px; text-align:center; font-size:90px; position:relative;font-family:pirulen; margin-bottom:0px;'>
					<center><div class='erts'></div></center>
				</h1>

				<h3 id='WelcomeHais' style='text-align:center; text-transform: capitalize; font-size:30px; text-align:center; letter-spacing:17px;font-family:dejavu;'>
					
					<center>
						<div>
						<span style='border-bottom:5px solid #FFCD05; padding-left:15px;'>Mahatala Network</span>
						
						<span class='kecil'>TrustWorty IT partner</span>
					</div>
					</center>

				</h3>
				
				
				<script type="text/javascript">
					function tiping(){
						$('#WelcomeHais span').typetype("Mahatala Network",{
							callback: function() {
						       tiping();
						    }
						}).delay(3000)
						.backspace(30);
						;			
					}
					//tiping();
				</script>
			</div>
	</center>
</section>
<section id='service' class='intro GreyColor Scolor padding-btm-10x padding-bt-10x' style='padding-top:180px; position:relative; overflow:hidden;'>
		<div id='parel' class='intro fullwidth backgroundservice image' data-parallax='{"x": 180}' style='position:absolute; top:0px;'>
			<div id='backgroundlapis' style='display:none;'>
				
			</div>
		</div>
		<div style='z-index:302; height:600px;'>
		
		</div>

		<div class='paralaxMenu'>

			<ul id='ServiceR' style='color:#708090; padding-top:30px;'>
				
					<li data-member='SD' data-id='2' data-color='activeone'><div class='ulala'><div id='Test'>Software</div><div>Development</div></div></li>
					<li data-member='NW' data-id='3' data-color='activetwo'><div class='ulala'><div id='ulalates'>Networking</div><div id='Test2'>Solution</div></div></li>
					<li data-member='WD' data-id='1' data-color='activetree'><div class='ulala'><div id='Test3'>Website</div> <div id='ulalatesyeah'>Design</div></div></li>
					<li data-member='EDP' data-id='4' data-color='activefoo'><div class='ulala'><div class='spacees'>Electronic</div> <div id='UlalaTea'>Device</div> <div class='spaceet'>Procurment</div></div></li>
			</ul>


		</div>
		<script type="text/javascript">
			
				$current="";
				$("#ServiceR li").click(function(){
					$("#ServiceR li").removeClass("activy");
					var me=$(this).attr("data-color");
					$(this).addClass("activy");
					$mahaID=$(this).attr("data-member");
					$dataID=$(this).attr("data-id");
					$.ajax({
                        method: "POST",
                        url:"admin/adminpage/Select.php",
                        context:me,
                        data:
                        {
                            service:true,
                            mahaID:$mahaID,
                            dataID:$dataID
                        },
                        success:function(result){
                        	$("#backgroundlapis").hide();
                        	$("#backgroundlapis").removeClass();
                        	$("#backgroundlapis").addClass(me);
                        	$("#backgroundlapis").fadeToggle(1000);
                        	$("#backgroundlapis").html(result);            
                        }
                    });

				});
				$(".collapse").click(function(){
					$("#backgroundlapis").hide();
					$("#ServiceR li").removeClass("activy");
					$(".modal-backdrop").hide();
					$(".modal").hide();
				});
				$(".modal").click(function(){
					$(".modal").hide();
				});

		</script>
				
</section>
<!--Work Start-->
<section id='work' class='intro padding-btm-10x padding-bt-10x'>
	<div class='fullwidth container'>

        <!-- Portfolio Projects -->
        <div class="col-md-12" id='projected' >
        	<div class='row' style='padding-top:30px;'>
        			<div class="col-md-12">
            	<!-- Filter -->
            
                <nav id="options" class="work-nav" style='padding-top:80px;'>
                    <ul id="filters" class="option-set" data-option-key='filter' style='font-weight:800;'>
                        <?php $sql="SELECT Kode,NamaJobs FROM mahatalajobs"; 
            		 		  $kode= mysql_query($sql);
            			?>
                        <?php
                        	$x=0;
                        	while($result=mysql_fetch_array($kode)){
                        		$x++;
                      		  echo"<li class='col-md-3'><a  href='#filter' style='font-size:20px;' data-val='$x' data-option-value='.".$result["Kode"]."'>".$result["NamaJobs"]."</a></li>";
                      		}
                        ?>
                    </ul>
                </nav>
                <script type="text/javascript">
               
                	$("#filters li a").click(function(){
                		$("#filters li").removeClass("activeProject");
                		$(this).parent().addClass("activeProject");
                	});

                </script>
                
            </div>

        	</div>
            <div id='satus' class='col-md-12 boxshad'>

            	<div class='row'>
            		<div class='col-md-3'>
            			<div class='col-md-12 coloron imageClients' style='margin:10px 5px;'></div>
            		</div>
            		<div class='col-md-3'><img src='Client/Bio/IMG01.jpg' class='imageClients' style='margin:10px 5px;'></div>     
            		

            		<div class='col-md-3'><div class='col-md-12 colortre imageClients' style='margin:10px 5px;'></div></div>
            		<div class='col-md-3'><img src='Client/Bio/IMG01.jpg' class='imageClients' style='margin:10px 5px;'></div>     
            		
            
            	</div>
            	<div class='row'>
            

            		<div class='col-md-3 '><img src='Client/Bio/IMG01.jpg' class='imageClients' style='margin:10px 5px;'></div>     
            		<div class='col-md-3'>
            			<div class='col-md-12 colortwo imageClients' style='margin:10px 5px;'></div>
            		</div>
            		<div class='col-md-3'><img src='Client/Bio/IMG01.jpg' class='imageClients' style='margin:10px 5px;'></div>     
            		<div class='col-md-3'>
            			<div class='col-md-12 colorfo imageClients' style='margin:10px 5px;'></div>
            		</div>
            	</div>


            </div>

            <div id='duas' class="col-md-12 boxshad" style='position:relative; display:none;'>
            	<div class="row">
                	<section id="projects" style='max-height:430px;'>
                		<div id="thumbs" style=''>
              
                    	<?php 
                    	echo"<ul class='item activerFlow' style='margin-left:0;'>";?>
							<?php
							$sql = "SELECT project.IDproject,project.NamaProject,project.Cover,mahatalajobs.Kode FROM project INNER JOIN mahatalajobs ON mahatalajobs.IDjobs=project.JenisJob WHERE project.Status='SELESAI' AND project.ACCEPTED='Accept'  ORDER BY `Date` DESC LIMIT 0,50";
							$results=mysql_query($sql) or die(mysql_error());
							?>
							<?php 
								while($resut=mysql_fetch_array($results)){
									
							?>
							<?php echo" 
									<li class='item-thumbs span3 ".$resut["Kode"]." imageClients'>
									  <div class='seleng hover-wrap' data-toggle='modal' data-target='#selengkapnya' data-manipulation='".$resut["IDproject"]."'>
	                                	<span class='overlay-img' title='".$resut["NamaProject"]."'></span>
	                                    <span class='overlay-img-thumb font-icon-plus'></span>
	                                  </div>
	                                   <img src='Client/Bio/".$resut["Cover"]."' class='imageClients'>	
	                                  
	                                </li>
	                                ";
	                            }
							?>

                        <?php echo "</ul>";?>

                    </div>
                   </section>  
            	</div>
            	<button id='selengkapt' type="button" class="btn btn-info" style='float:right;'>Selengkapnya</button>
            </div>
            <style type="text/css">
            	.ety{
            		display: none;
            	}
            </style>

            <script type="text/javascript">
            	$("#filters li a").click(function(){
            		$("#satus").hide();
            		$("#duas").fadeIn(5000);

            	});
            </script>
        </div>
        	<script type="text/javascript">
        		$("#filters li a").click(function(){
        			$('#projects').removeClass('activerFlow');
        			$("#projects").addClass('deactiveFlow');
        			$("#projects").animate({ scrollTop: 0 }, "slow");
        			$tes=$(this).attr("data-val");
           		});
           		$("#selengkapt").click(function(){
           			
           				$('#projects').addClass('activerFlow');	
           			
           			
           			
           		});
        		$(".seleng").click(function(){
        			
        			$es=$(this).attr("data-manipulation");
        			
        			$.ajax({
        				method: "POST",
                        url:"admin/adminpage/Select.php",
                        data:
                        {
                            Pope:true,
                            jenis:$es
                        },
                        success:function(result){
                        	$("#gale").html(result);     
                        }
        			});
        		});
        	</script>
	</div>
</section>
<!--Modal Selengkapnya-->  
<div style='color:black;' class="modal fade disablemodal" id="selengkapnya" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	  <div class="modal-dialog ModalGalery">
	  		<div id='gale' class='col-sm-12'>
	  			

	  		</div>
	  </div>
</div> 

<!--Modal Price--> 

<div style='color:black;' class="modal fade disablemodal" id="Pricing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	  <div class="fullwidth">
	  	<div class='row'>
	  		<div class='col-md-12' style='color:rgb(22,21,21); position:relative; height:250px; overflow-y:hidden; overflow-x:auto;'>
	  			<h3 style='color:#FFFFFF;'><center id='roonStyle'>OFFER</center></h3>
	  			<?php 
	  				$sql=mysql_query("SELECT * FROM mahatalajobsdata INNER JOIN mahatalajobs ON mahatalajobsdata.IDjobs=mahatalajobs.IDjobs WHERE mahatalajobsdata.Booming='1'") or die(mysql_error());
	  				while($result=mysql_fetch_array($sql)){
	  			?>
	  			<?php
	  			echo"
	  			
	  			<div class='col-md-3 poping' data-tag='".$result["Kode"]."' style='position:relative; height:80%; width:20%; display:none; background-color:#FFFFFF; margin:0px 33px; padding:0px;'>
	  				<div class='col-md-12 text-center' style=' font-size:14px; border-bottom:1px solid rgb(22,21,21);'>
	  					".$result["Nama"]."
	  				</div>
	  				<div class='bodys col-md-12' style='border-top:1px solid #000000; border-bottom:1px solid #000000;'>
	  					<ul class='liston'>";
	  			;?>
	  					<?php $sqls=mysql_query("SELECT* FROM keteranganjobs WHERE IDjobsdata='".$result["IDjobdata"]."'") or die(mysql_error());
	  						while($res=mysql_fetch_assoc($sqls)){
	  							echo "<li><i class='fa fa-angle-double-right'></i> ".$res["List"]."</li>";
	  						}
	  					?>
	  			<?php
	  			echo"
	  					</ul>
	  				</div>

	  				<div class='col-md-12 text-center' style='height:20%;'>
	  					Start From: $".$result["StartForm"]."
	  				</div>
	  			</div>
	  			";
	  			}?>
	  		</div>
	  	</div>
	  	<script type="text/javascript">
	  	var globalo;
	  	$(document).ready(function(){
	  		$(".signup").click(function(){

	  			var atr=$(this).attr("data-tag");
	  			var atrs=$(this).attr("data-ket");
	  			globalo=$(this).attr("data-tros");
	  			$("#roonStyle").html("OFFER "+atrs);
	  			$(".poping").hide();
	  			$("[data-tag="+atr+"]").fadeIn(3000);
	  		});
	  	});
	  		

	  	</script>	
	  	<div class='col-md-12' style='position:relative;'>
	  		<div class='col-md-12' style='height:300px; margin:15px 0px; background-color:#FFFFFF; position:relative;'>
	  			<div class='col-md-4' style='padding:30px 0px;'>
	  				<div class='col-md-12'>
	  					<input type="text" class="inp form-control" id="names" placeholder="Nama">
	  				</div>

	  				<div class='col-md-12'>
	  					<input type="text" class="inp form-control" id="namos" placeholder="Nama Perushaan">
	  				</div>

	  				<div class='col-md-12'>
	  					<input type="text" class="inp form-control" id="nemes" placeholder="+620857436xxx">
	  				</div>

	  				<div class='col-md-12'>
	  					<input type="text" class="inp form-control" id="nemis" placeholder="mahatala@gmail.com">
	  				</div>
	  				<div class='col-md-12'>
	  					<input type="text" class="inp form-control" id="lima" placeholder="Title Of Project">
	  				</div>
	  			</div>
	  			<div class='col-md-8' style='padding:30px 0px;'>
	  				<textarea disabled id="OrderArea" class="form-control" rows="6" placeholder="Order"></textarea>
        			<button type="button" class="pull-right btn btn-primary" id='submition'>Submit</button>
	  			</div>
	  			<script type="text/javascript">
	  				$(document).ready(function(){
	  					var satu,dua,tiga,empat;
	  					$(".inp").on("change",function(){
	  						satu=$("#names").val();
	  						dua=$("#namos").val();
	  						tiga=$("#nemes").val();
	  						empat=$("#nemis").val();
	  						lima=$("#lima").val();
	  						
	  						if(satu&&dua&&tiga&&empat&&lima!='')
	  							$("#OrderArea").prop('disabled',false);
	  						else{
	  							$("#OrderArea").prop('disabled',true);
	  						}
	  					});
	  					
	  					$("#submition").click(function(){
	  						if($("#OrderArea").val()!=''){
	  							
	  							var oi=$("#OrderArea").val();
	  							var formsData = new FormData();
	  							formsData.append("Order",true);
	  							formsData.append("jenis",globalo);
	  							formsData.append("satu",satu);
	  							formsData.append("dua",dua);
	  							formsData.append("tiga",tiga);
	  							formsData.append("empat",empat);
	  							formsData.append("lima",oi);
	  							formsData.append("enam",lima);

	  							$.ajax({
	  								method:"POST",
	  								url:"admin/adminpage/Insert.php",  
							        contentType: false,
							        processData: false,
							        data:formsData,
							        success:function(result){
							        	$(".modal").hide();
							        }
				  				});
				  			}

				  		});

	  				});//ini batas
	  			</script>
	  		</div>
	  	</div>
	  </div>
</div> 

<!--Price Start-->
<section id='price' class='fullwidth' style='margin-top:50px; padding-bottom:200px; background: url(img/price.png) no-repeat top center !important;
	background-size: cover !important;'>
			<link rel="stylesheet" type="text/css" href="css/pricing.css">
		
            <div class="PriceBack">
                <div class="title-page" style='color:#FFFFFF; margin-bottom:40px;'>
                    <h2 class="title" style='padding-top:50px;'>Price List</h2>
                </div>
            </div>
        
			<div id="pricing-table" class="clear" style='height:100%; margin-top:0px;'>
			    <div class="col-xs-3 plan ">
			        <h3 class='GreyColor'>Web <br>Desain<span class='Start fontas'>Start</span><span class='bulder'>CALL</span><span class='From fontas'>From</span></h3>
			        <a class="signup"  data-tros='1' data-tag='WD' data-ket='Web Desain' href="#" data-toggle='modal' data-target="#Pricing" data-manipulation='1'>Make Deal</a>         
			        <ul>
			            <li><b>HTML</b></li>
			            <li><b>CSS</b></li>
			            <li><b>Javascript</b></li>
			        	<li><b>UI/UX</b></li>            
			        </ul> 
			    </div>
			    <div class="col-xs-3 plan " id='most-popular'>
			        <h3 class='GreyColor'>Software Developtment <span class='Start fontas'>Start</span><span class='bulder'>CALL</span><span class='From fontas'>From</span></h3>
			        <a class="signup" data-tros='2' data-tag='SD' data-ket='Software Developtment' href="#" data-toggle='modal' data-target="#Pricing" data-manipulation='1'>Make Deal</a>         
			        <ul>
			            <li><b>SOFTWARE RUMAH SAKIT</b></li>
			            <li><b>WEB APPS</b></li>
			            <li><b>SOFTWARE KANTOR</b></li>
			        	<li><b>Database</b></li>            
			        </ul> 
			    </div>

			    <div class="col-xs-3 plan ">
			        <h3 class='GreyColor'>Networking Solution<span class='Start  fontas'>Start</span><span class='bulder'>CALL</span><span class='From fontas'>From</span></h3>
			        <a class="signup" data-tros='3' data-tag='NW' data-ket='Networking Solution' href="#" data-toggle='modal' data-target="#Pricing" data-manipulation='1'>Make Deal</a>         
			        <ul>
			            <li><b>SERVER</b></li>
			            <li><b>ROUTER</b></li>
			            <li><b>SETTING JARINGAN</b></li>
			       		<li><b>Hosting</b></li>            
			        </ul> 
			    </div>

			     <div class="col-xs-3 plan ">
			        <h3 class='GreyColor'>Electronic Device Procunument <span class='Start fontas'>Start</span><span class='bulder'>CALL</span><span class='From fontas'>From</span></h3>
			        <a class="signup" data-tros='4' data-tag='EDP' data-ket='Electronic Device Procunument' href="#" data-toggle='modal' data-target="#Pricing" data-manipulation='1'>Make Deal</a>         
			        <ul>
			            <li><b>UPS</b></li>
			            <li><b>FLASH DISK</b></li>
			            <li><b>GENSET</b></li>
			        	<li><b>SET COMPUTER</b></li>            
			        </ul> 
			    </div>
			</div>
			
			<script type="text/javascript">
				$(document).ready(function(){
					$("#pricing-table div").mouseenter(function(){
						$("#pricing-table>div").removeAttr("id");
						$(this).attr("id","most-popular");
					});

				});
				
			</script>

	</section>
<!--About Start-->

<section id='about' class='intro AboutBg' style='padding:75px 0px; color:#000000; height:auto; font-family:Calibri; position:relative;'>
	<div class='fullwidth' style='position:absolute; height:95%; overflow:hidden;'>
	<div id='parels' class='intro fullwidth backgroundservice image' data-parallax='{"y": 1300,"distance": 100,"duration": 300}' style='position:absolute; top:0px;'>
			<div class='backgroundlapis' style='display:none;'>
				
			</div>
	</div>
	</div>
	<div class='container fullwidth'>
		<div class='col-md-12'>
			<?php
			$sql =mysql_query("SELECT * FROM mahanet");
			$result=mysql_fetch_array($sql);
			echo"
			<section class='row'>
			<section class='col-md-12'>
				<h2 style='font-family:dejavu;'>".$result["CompanyName"]."</h2>
				<h5 class='small' style='font-family:dejavu;'>".$result["IZIN"]."</h5>
			</section>
			<section class='col-md-7' style='height:100%;'>
				<p class='text-justify output' style='font-size:18px; font-weight:500;'>
				".$result["CompanyProf"]."
				</p>
				<div class='col-md-9'>
			<h8><u><i class='fa fa-road'>".$result["Kota"]."-".$result["Alamat"]."</i></u></h8><br><br>

				<div class='col-sm-6'>
						<div class='row'>
							<i class='fa fa-phone'>&nbsp<span style='font-size:10px;'>".$result["NomerTelpon"]."</span></i>
						</div>
						<div class='row'>
							<i class='fa fa-phone'>&nbsp<span style='font-size:12px;'>".$result["BBM"]."</span></i>
						</div>
				</div>
				<div class='col-sm-6'>
						<div class='row'>
							<i class='fa fa-envelope-o'>&nbsp<span style='font-size:10px;'>".$result["Email"]."</span></i>
						</div>
						<div class='row'>
						<i class='fa fa-mobile-phone'>&nbsp<span style='font-size:12px;'>".$result["Handphone"]."(Call/SMS/Whatsapp)</span></i>	
						</div>
				</div>
			</div>
			</section>
			<section class='col-md-5'>
				<img src='Client/Bio/".$result["IMG"]."' class='fullwidth' style='height:400px; padding-bottom:50px;'>
			</section>
			</section>
			

			";
			?>
		</div>
	</div>
	</section>

<!--Testimoni Start-->

<section id='scope' class='intro  fullwidth' style='margin-bottom:50px;'>
	  <div class='col-md-12'>
	  		<h2 class='page-header text-center' style='border-color:#000000; padding-top:30px;'>Details</h2>
	  </div>
	  <div class='col-md-12' style='margin-bottom:10px;'>
	  		<div class='col-md-12'>
	  			<?php
	  			for($i=0;$i<45;$i+=15){
	  				echo"<ul class='col-md-4 upil' style='margin:0px;padding:30px 10px;'>";

	  				$sql=mysql_query("SELECT Nama FROM mahatalajobsdata WHERE Booming='0' ORDER BY rand() LIMIT $i,15");
	  				
	  				while($result=mysql_fetch_array($sql)){
	  					echo"
	  						<li class='listing'><a><i class='fa fa-pencil'></i><span style='padding-left:15px;'>".$result["Nama"]."</span></a></li>
	  					";
	  				}
		  			echo"</ul>";
		  		}
	  			?>
	  		</div>
	  </div>
</section>
<section id='Testimon' class='backte colorUngu' style='background-color:#1A7C69; padding-top:50px;'>
		<link rel="stylesheet" type="text/css" href="css/TimeLine.css">
			<div class="container">
    <div class="page-header">
        	<center><h1>Testimoni</h1></center>

<!-- Modal -->
<div class="modal fade" id="testimoniModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style='color:#110d0d;'>Testimonial</h4>
      </div>
      <div class="modal-body">
      	<style type="text/css">
      		form{
      			color: #110d0d;
      		}
      		input[type="text"]{
      			padding: 13px 6px ;
      		}
      	</style>
        <form>
          <div class="form-group">
            <label for="user-name" class="control-label">Nama:</label>
            <input type="text" class="form-control" id="user-name" placeholder='Diles'>
          </div>
          <div class="form-group">
            <label for="jabatan" class="control-label">Keterangan User:</label>
            <input type="text" class="form-control" id="jabatan" placeholder='CEO Andi Offset'>
          </div>
          <!--
          <div class="form-group">
		    <label class="control-label" for="exampleInputFile">Foto</label>
		    <input type="file" id="exampleInputFile">
		  </div>-->
		  <div class="form-group">
		    <label class="control-label" for="TestimonArea">Testimoni for Project:</label>
		   	<select id='projectfor'>
		   		<option value='Default' selected></option>
		   			<?php
		   				
		   				$result=mysql_query("SELECT project.IDproject,project.NamaProject FROM project WHERE project.Status=\"SELESAI\"") or die(mysql_error());
		   				while ($ress=mysql_fetch_array($result)) {
		   					echo "<option data-projectid='".$ress["IDproject"]."'>".$ress["NamaProject"]."</option>";
		   				}

		   			?>

		   	</select>
		  </div>
		   <div class="form-group">
		    <label class="control-label" for="TestimonArea">Testimoni</label>
		   	<textarea id='TestimonArea' class="form-control" rows="3" placeholder='Testimoni'></textarea>
		  </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id='savetestimo'>Save changes</button>
      </div>
      <script type="text/javascript">
      		$(document).ready(function(){
      			$("#savetestimo").bind('click',function(){
      				$username=$("#user-name").val();
      				$jabatan=$("#jabatan").val();
      				$testimon=$("#TestimonArea").val();	
      				$projectId=$("#projectfor").find('option:selected').attr('data-projectid');
      				
      				
      				$.ajax({
                        method: "POST",
                        url:"admin/adminpage/Insert.php",
                        data:
                        {
                            testimoniPos:true,
                            name:$username,
                            jabatan:$jabatan,
                            testimon:$testimon,
                            img:"default.png",
                            IDproject:$projectId
                        },
                        success:function(result){
                        	if(result==="berhasil"){
                          	 $(".modal.fade").removeClass('in');  
                             $(".modal-backdrop.fade").removeClass('in');
                             $(".alert.alert-info").html("Hai <u>"+$username+"</u> Mohon Tunggu Sebentar Permintaan Sedang di proses");
                             $(".alert.alert-info").fadeIn(4000);
                             $(".alert.alert-info").fadeOut(8000);
                        	}
                        	else if(result==="gagal"){
                        		$(".alert.alert-warning").fadeIn(3000);
                        		$(".alert.alert-warning").fadeOut(4000);
                        	}
                                                 
                        }
                    });

      			});
      		});

      </script>
    </div>
  </div>
</div>
    	

        	<div ><center>
        	<button type="button" class="btn btn-info" data-toggle='modal' data-target="#testimoniModal" style='background-color:#FFCC00; background-image: linear-gradient(to bottom,#FFCC00,#FFCC00); color:#000000; font-weight:800;'><i class='fa fa-plus'>&nbspGive Testimon</i></button>
        	</div></center>
    </div>
    <ul class="timeline">
    	<?php
    		$positiontime =["t","timeline-inverted"];
    		$timeline= mysql_query("SELECT project.Client,project.NamaProject,testimoni.User,testimoni.TanggalTestimoni,testimoni.Testimon,testimoni.imageUser FROM testimoni INNER JOIN project ON project.IDproject=testimoni.title WHERE testimoni.Filter='Diizinkan' ORDER BY `TanggalTestimoni` DESC") or die(mysql_error());
    		$ink=0;
    		
    		while($timelines=mysql_fetch_array($timeline)){
    		if($ink%2===0){
    		echo"
    		<li>
	          <div style='background-color:#FFCC00;' class='timeline-badge' ><i class='fa fa-calendar' ></i></div>
	          
	          <div class='timeline-panel' style='height:200px; background-color:#336666; overflow-y:auto; overflow-x:hidden;'>
	            <div class='timeline-heading'>
	            <div>
	              <h4 class='timeline-title' style='margin-bottom:0px;'>".$timelines["Client"]."</h4><h5 style='margin-top:0px; margin-bottom:10px;'><small class='text-muted small' style='color:#000000; font-weight: 700; font-size:12px;'>".$timelines["NamaProject"]."</small></h5>
	            </div>
	              <p style='margin-bottom:5px;'><small class='text-muted' style='color:#FFFFFF; font-weight:500;'><i class='fa fa-user'></i> ".$timelines["User"]."&nbsp&nbsp<i class='glyphicon glyphicon-time'></i> ".date('M Y h:i',strtotime($timelines["TanggalTestimoni"]))."</small></p>
	            </div>
	            <div class='timeline-body'>
	              <p>".$timelines["Testimon"]."</p>
	            </div>
	          </div>
	        </li>
	        ";
	    	}
	    	else{
		    	echo"
	    		<li class='timeline-inverted'>
		          <div style='background-color:#FFCC00;' class='timeline-badge info '><i class='fa fa-calendar'></i></div>
		          <div class='timeline-panel' style='height:200px; background-color:#336666;  overflow-y:auto; overflow-x:hidden;'>
		            <div class='timeline-heading'>
		            <div>
		              <h4 class='timeline-title' style='margin-bottom:10px; '>".$timelines["Client"]."</h4><h5 style='margin-bottom:5px;'><small class='text-muted small' style='color:#000000; font-weight: 700; font-size:12px;'>".$timelines["NamaProject"]."</small></h5>
		            </div>
		             <p style='margin-bottom:10px; '><small class='text-muted' style='color:#FFFFFF; font-weight:500;'><i class='fa fa-user'></i> ".$timelines["User"]."&nbsp&nbsp<i class='glyphicon glyphicon-time'></i> ".date('M Y h:i',strtotime($timelines["TanggalTestimoni"]))."</small></p>
		            </div>
		            <div class='timeline-body'>
		              <p>".$timelines["Testimon"]."</p>
		            </div>
		          </div>
		        </li>
		        ";
	    	}
	    	$ink+=1;
    		}
    	?>
    </ul>
</div>
</section>



</div> <!--Main COntaioner-->
	

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
   	<script src="js/custom.js"></script>

	<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
	<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
	<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
	<script type="text/javascript" src='_include/js/waypoints-sticky.js'></script>
	<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->

	<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
	<script src="_include/js/main.js"></script> <!-- Default JS -->

	
	<!-- End Js -->
</body>
</html>
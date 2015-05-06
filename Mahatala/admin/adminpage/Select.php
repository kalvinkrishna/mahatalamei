
<?php
  session_start();
  include "../../db/dataBaseConnection.php";
    if(isset($_POST["jobs"])){
        $query=mysql_query("SELECT projectdata.IDsdata,projectdata.image FROM projectdata INNER JOIN project ON project.IDproject=projectdata.IDproject WHERE projectdata.IDproject='".$_POST["jobs"]."'") or die(mysql_error());
        $cover=mysql_query("SELECT project.Cover FROM project WHERE project.IDproject='".$_POST["jobs"]."'");

        $rescov =mysql_fetch_array($cover);
        echo "<div class='col-md-3' style='padding-top:30px;'>
          <h2><center>Cover Home</center></h2>
          <img id='Image' src='../../Client/Bio/".$rescov["Cover"]."' class='img-responsive' style='height:200px;'></img>
          <input id='Covert' data-ids='".$_POST["jobs"]."' name='Cover' type='file'></input>
          <a href='Task.php'><button id='Selet' type='button' class='btn btn-primary'>Selesai</button></a>
        </div>";
        $_SESSION["idku"]=$_POST["jobs"];
        echo"
            <div id='galer' class='col-md-9 er'>
           
              <h4>Galery Foto</h4>
              <form>
               <input id='Galfot' data-ids='".$_POST["jobs"]."' type='file'></input>
               </form>
            
        ";

        if(mysql_num_rows($query)<=0){
          echo"<h4>Belum Ada Foto</h4>";
        }
            while($result=mysql_fetch_array($query)){
              echo"<div class='col-md-3' style='margin:25px; height:100px; position:relative;'>";
              echo"<img src='../../Client/Bio/".$result["image"]."' style='display:inline-block; min-height:110px; max-height:110px; width:100%;' class='img-responsive'></img>";
              echo"
                <span class='glyphicon glyphicon-remove remove' data-remove='".$result["IDsdata"]."' style='position:absolute; right:0px; top:0px; cursor:pointer;' title='Delete'></span>
              </div>";
            }
        echo"
           
            </div>
        ";
        $_SESSION["newUpdate"]=$_POST["jobs"];
    }

    if(isset($_POST["service"])){
      $sql = "SELECT * FROM mahatalajobs WHERE Kode='".$_POST["mahaID"]."'";
      $result=mysql_fetch_array(mysql_query($sql));

      echo"
        <div class='col-md-12' style='padding-top:55px;'>
            <div class='container'>
            
            </div>
            
            <section class='col-md-10' style='padding-left:50px;margin-top:50px;'>
            <p class='text-justify output' style='font-size:18px; font-weight:500;'>
              ".$result["DeskripsiJob"]."
            </p>
            <div class='col-md-12' style='padding-left:35px; padding-right:30px;'>
      ";
             if($result["SampleImage"]!=null)
               echo "<img id='Image' src='Client/BIO/".$result["SampleImage"]."' class='imageClienty' style='margin-left:0px; background-color:grey;'></img>";
             if($result["SampleImage2"]!=null)
              echo "<img id='Image' src='Client/BIO/".$result["SampleImage2"]."' class='imageClienty' style='margin-left:0px; background-color:grey;'></img>";
             if($result["SampleImage3"]!=null)
              echo "<img id='Image' src='Client/BIO/".$result["SampleImage3"]."' class='imageClienty' style='margin-left:0px; background-color:grey;'></img>";
      echo"
            </div>

            </div>
            </section>
            
        </div>

      ";

    }

    if(isset($_POST["Pope"])){
    echo"<h3 style='background-color:#FFFFFF;'><center>Galery <i class='fa fa-close pull-right close'></i></center></h3>";
    $sql=mysql_query("SELECT image FROM projectdata WHERE IDproject='".$_POST["jenis"]."'") or die(mysql_error());
    while($result=mysql_fetch_array($sql)){
        echo"
          <div class='col-md-2' style='height:200px;'>
            <img src='Client/Bio/".$result["image"]."' class='img-responsive' style='height:80%; width:100%;'>
          </div>
        ";
      }
    }

?>
<script type="text/javascript">
$(".close").click(function(){
  $(".modal-backdrop").hide();

  $(".modal").hide();
});
  $(".remove").on('click',function(){
      var remover=$(this).parent();
      var remov=$(this).attr("data-remove");
      
      $.ajax({
        method:"POST",
        url:"Delete.php",
        contex:remover,
        data:{
          remove:remov
        },
        success:function(result){
          remover.fadeOut(3000);
        } 
      });
  });

  var bodo=[];
  $(".col-md-9.er").on('click','.new',function(e){
      var oep=$(this);
      var id=$("#Covert").attr("data-ids");
     //var img=oep.attr("src").substring(17,oep.attr("src").length);
      var formsData = new FormData();
     formsData.append('GaleryFoto',true);
     formsData.append('ID',id);
     formsData.append('image',bodo[$(this).attr("data-et")]); //ambil image

      $.ajax({
        method:"POST",
        url:"Insert.php",
       // contex:oep,
        contentType: false,
        processData: false,
        data:formsData,
        success:function(result){
          oep.removeClass("new");
          oep.addClass("accept");
        }

      });

  });
  $("#Covert").on("change",function(){ 
    readURL(this,$(this).attr("data-ids"));
  });
  var x=0;
  $("#Galfot").on("change",function(){ 
    //readURL(this,$(this).attr("data-ids"));
    //var reader = new FileReader();

    $app=$("<div class='col-md-3' style='margin:25px; height:200px;'><img src='' style='display:inline-block; height:100%; width:100%;' data-et='' class='new'></img></div>");
    $(".col-md-9").append($app);
    reader(this,$app);
  });
  function reader(input,obj){
    
    if(input.files&& input.files[0]){
      bodo[x]=input.files[0];   
      var reader=new FileReader();
      reader.onload=function(e){
        obj.children().attr("src",e.target.result);
        obj.children().attr("data-et",x++);
      }
    
      reader.readAsDataURL(input.files[0]);

    }
  }

  function readURL(input,id) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                   
                    var formData = new FormData();
                   //formData.append('image', 'Chris');
                    formData.append('image',input.files[0]);
                    
                    formData.append('jobs',id);
                    reader.onload = function (e) {
                       // console.log(e.target.result);                 

                        $('#Image').attr('src', e.target.result);
                        
                        $.ajax({
                          method:"POST",
                          url:"Update.php",
                          contentType: false,
                          processData: false,
                          data:formData,
                          success:function(result){
                            
                          }
                        });
                    }
                    reader.readAsDataURL(input.files[0]);
                }
  }
  
</script>
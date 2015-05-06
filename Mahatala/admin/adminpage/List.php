<?php 
                                //active for active class
        $sql=mysql_query("SELECT * FROM mahatalajobs") or die(mysql_error());
        $i=1;
        while($result=mysql_fetch_array($sql)){
           if($_GET["jobs"]==$i){                                       
               echo"<a href='index.php?jobs=".$result["IDjobs"]."&lim=1' class='list-group-item active'>";
           }
            else{
             echo"<a href='index.php?jobs=".$result["IDjobs"]."&lim=1' class='list-group-item'>";
           }
             echo"
                 <h4 class='list-group-item-heading' data-idtarget='".$result["IDjobs"]."' id='".$result["Kode"]."'>".$result["NamaJobs"]."</h4>
                     <p class='list-group-item-text text-justify output'>".substr($result["DeskripsiJob"],0,70)." ...</p>
                                        </a>";
                                    $i++;
            }
?>
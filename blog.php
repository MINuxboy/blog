<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <?php
    include 'head.php';
    include 'dbase.php';
    include 'sqlobj.php';
    ?>

</head>
<body>
  
<?php
    $ck    = $_COOKIE["login"];
      //   echo " $ck";
     $ckarr= explode(":",$ck);
    // echo "u level is $ckarr[1]";
    $ulevel=$ckarr[1];
    $str1 = "SELECT *FROM pages";
    $rs2 = $bdd->query($str1) or die("error on $str1");
   
    /*while($row2=$rs2->fetch()){
       print_r($row2);
    }*/

   ?>
<nav class="navbar navbar-expand-md bg-success sticky-top border-bottom" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand d-md-none" href="#">
      <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
      Aperture
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Aperture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
    
        <ul class="navbar-nav flex-grow-1 justify-content-between">
       
          <li class="nav-item"><a class="nav-link" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
          </a></li>
          <?php while($row2 = $rs2->fetch()) { ?>
          <a class="nav-link active" aria-current="page" href="<?php echo $row2[1]?>"> <?php echo $row2[2] ?> </a>
          <?php } ?>
         
            <svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
          </a></li>
        </ul>
       
      </div>
    </div>
  </div>
</nav>
    <center><h1>Blog create</h1></center>
<form id="#formid">
    <div class="card px-5 py-4">
        <div class="card-body" >  
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <!-- <label for="name">Name</label> --> <input class="form-control" type="text" id='titel' placeholder="title"> </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" id='content' placeholder="content"> </div>
                    </div>
                </div>
            </div>
            <br>
           
            <div id='rdata'>...</div>
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-3">  </div> <button class="btn btn-primary btn-block confirm-button" type=button onclick ='find()'>Confirm</button>
        </div>
    </div>
  </form> 
  <?php
  $str1 = "SELECT * FROM posts ORDER BY id DESC";
  $rs1 = $bdd->query($str1) or die("Query error");

while ($row1 = $rs1->fetch()) { ?> 
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row1[0]; ?></h5>
            <p class="card-text"><?php echo $row1[1]; ?></p>
            <button class="test1" type="button" id="<?php echo $row1[0] ?>" value="Edit" onclick="editdata(this.id)">Edit</button>
            <button class="test2" type="button" id="d<?php echo $row1[0] ?>" value="Delete" onclick="deletedata(this.id)">Delete</button>
        </div>
    </div>
<?php } ?>

            



</body>
<?php
include 'foot.php';
?>
<script type='text/javascript'>
    $(document).ready(function(){
      
    });
    function find(){
  
        var vals=$("input").map(function(){return $(this).val();}).get()
         $.ajax({
            type:'post',
            data:{pvals:vals},
            url:'blogsave.php',
            success:function (json){$("#rdata").html(json); }
        })
    }
</script>

</html>
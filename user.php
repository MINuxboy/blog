<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <?php
    include 'head.php';
    include 'dbase.php';
    
    ?>
</head>
<body>
    <center><h1>Register now!</h1></center>

<div class="container mt-5 mb-5 d-flex justify-content-center">
<form id="#formid">
    <div class="card px-5 py-4">
        <div class="card-body" >  
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <!-- <label for="name">Name</label> --> <input class="form-control" type="text" id='fname' placeholder="Full Name"> </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" id='uname' placeholder="user name"> </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="email" id='umail' placeholder="Email"> </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="number" id='admin' placeholder="admin"> </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="password" id='pword' placeholder="password"> </div>
                    </div>
                </div>
            </div>
            <div id='fdata'>...</div>
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-3">  </div> <button class="btn btn-primary btn-block confirm-button" type=button onclick ='find()'>Confirm</button>
        </div>
    </div>
  </form>
</div>

    
</body>
<?php
include 'foot.php';
include 'sqlobj.php';
?>
<script type='text/javascript'>
    $(document).ready(function(){
      
    });
    function find(){
  
        var vals=$("input").map(function(){return $(this).val();}).get()
        $.ajax({
            type:'post',
            data:{pvals:vals},
            url:'usave.php',
            success:function (json){$("#fdata").html(json); }
        })
    }
</script>
</html>
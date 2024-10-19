<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php
     include 'head.php';
     include 'dbase.php';

     ?>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary ">
<main class="form-signin w-100 m-auto">
  <form id="loginform" method="post">
    <div class="container">
        <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Login to  Blog </h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="uname" >
                <label for="floatingInput">User Name</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="password" class="form-control" id="pword">
                <label for="floatingPassword">Password</label>
            </div>
            
            <button class="btn btn-success w-100 py-2" type="submit">Sign in</button>
            <div id='formdata'>... </div>
            <p class="mt-5 mb-3 text-body-secondary"><a href="user.php">register now</p>
    </div>
  </form>
</main>
    
</body>
<?php
include 'foot.php';
?>
<script type='text/javascript'>
    $(document).ready(function(e){
        $("#loginform").submit( function (e){
	//e.preventdefault();
	var vals =$(':input').map(function(){ return $(this).val() }).get();
    // alert(vals);

    $.ajax({
        type:'post',
        data:{vals:vals },
        url:'loginsave.php',
        success: function (json){   $('#formdata').html(json); alert(json) ;     } 
})

    })

});
</script>

</html>
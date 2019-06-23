<?php include_once("functions.php"); ?>
<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if($username == 'admin' && $password == 'admin') {
            session_start();
            $_SESSION["authenticated"] = 'true';
            header('Location: search-id-1.php');
        }
        else {
            header('Location: login.php');
        }
        
    } else {
        header('Location: login.php');
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet"> 
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->

<div id="page" style= "padding-left: 300px">
    <!-- [banner] -->
    <div class="breadcrumb1" style= "padding-left: 100px">
     <ul>
     <br>
        <br>
        <a href="index.php"><i class="fa fa-home fa-lg"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page" style="font-size:50px; font-family: 'Wendy One', sans-serif;">Login</li>
        <br>
        <br>
     </ul>
   </div>
    <!-- [content] -->
    <section id="content" style= "padding-left: 100px">
    <div class="col-sm-6 login_center">
    <form id="login" method="post">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" name="username" value="" size="60" maxlength="60" class="form-text required">
	    </div>
	    <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" name="password" size="60" maxlength="128" class="form-text required">
	    </div>
        <input type="submit" value="Login">
           
        </form>
        </div>
    </section>
    <!-- [/content] -->
    
  
</div>
<!-- [/page] -->
</body>

</html>
<?php } ?>
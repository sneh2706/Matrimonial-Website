<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>TraditionalMatrimony.com | About :: Make My Love
</title>
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
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
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
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page"><b>About</b></li>
     </ul>
   </div>
   <div class="about">
   	  <div class="col-md-6 about_left">
   	  	<img src="images/a3.jpg" class="img-responsive" alt=""/>
   	  </div>
   	  <div class="col-md-6 about_right">
   	  	<h1><b>About us</b></h1>
				 <p>Welcome to TraditionalMatrimony.com Every life has its own charm in each stage and a married life is no exception. Marriage is an institution, which initiates the authentic values of life. In India, a marriage is usually arranged by the family or Relatives of the bride or the groom within a known circle. But today~s nomad life has narrowed this choice and hence matrimonial bureaus and marriage websites lead a vital role. Marital.com is celebrated as the most Trusted Matrimony Brand combining tradition and technology.</p>
   	  	<div class="accordation">
		   <div class="jb-accordion-wrapper">
				<div class="jb-accordion-title">
				Important features of Marital.com: <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-1-"><i class="fa fa-angle-down"> </i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-1-" class="jb-accordion-content collapse in" style="height: auto;">
			<p>   1. Free and easy profile registration.<br>
    2. Safe and secure site. 100% privacy guaranteed.<br>
    3. registered profiles are manually screened and validated to ensure they meet the norms of our site.<br>
    4. User friendly interface and features for easy partner search.<br>
    5. Customer service team to assist you in all the queries raised.<br>
</p>
				</div>
				<p><!-- /.collapse --></p>
			</div>
			
		</div>
   	  </div>
   	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<div class="about_middle">
	<div class="container">
	  <h2>Happy Clients</h2>
	  <div class="about_middle-grid1">
		<div class="col-sm-6 testi_grid list-item-0">
			<blockquote class="testi_grid_blockquote">
				<figure class="featured-thumbnail">
					<img src="images/a1.jpg" class="img-responsive" alt=""/>
				</figure>
				<div><a href="#">This is the place where I got my life partner. I am very happy in my life and wanted to thank this site for letting me find the perfect match for me.</a>
				<div class="clearfix"></div>
				</div>
			</blockquote>
		    <small class="testi-meta"><span class="user">Aaradhya</span></small>
		</div>
		<div class="col-sm-6 testi_grid list-item-1">
			<blockquote class="testi_grid_blockquote">
				<figure class="featured-thumbnail">
					<img src="images/a2.jpg" class="img-responsive" alt=""/>
				</figure>
				<div><a href="#">I am very thankful to the TraditionalMatrimony.com for finding the perfect match for me.</a>
				<div class="clearfix"></div>
				</div>
			</blockquote>
			<small class="testi-meta1"><span class="user">Akshat</span></small>
		</div>
		<div class="clearfix"> </div>
	  </div>
</div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	
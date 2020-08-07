<?php
session_start();
include('session-admin.php');

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Power of 5</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!-- css files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- fonts -->
<!-- js files -->
<script src="js/modernizr.js"></script>
<!-- /js files -->
</head>
<body>
<?php include('analytics.php'); ?>
<!-- banner section -->
<?php include ("inner_menu.php") ;?>

<!-- about section -->
<div id="banner">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 col-sm-12 col-xs-12">
        	<h1>About Us</h1>
            	<img src="images/abt_banner.jpg" class="img-responsive" alt="best-political-consulting-firms">
            </div>
        </div>
    </div>
</div>



<div class="about">
	 <div class="container">
		 <div class="about-grids">
			 <div class="col-md-6 about-info">
				 <h3>Thank you</h3>
				 <h5><?php echo $correct; ?></h5>
			 </div>
			 <div class="col-md-6 abt-pic">
				 <img src="images/pic.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>			 
		 </div>
		 
		 
		
	 </div>
</div>



<div class="join">
	 <div class="container">
		 <div class="col-md-9 join-info">
		      <p>To participate in this, a onetime entry payment of N1,200 is required, and you will be  <br> given a mathematics hand booklet with a video cd that contain an explanation of the mathematics hand booklet</p>
            <h2>REFER SOMEONE?</h2>
		 </div>
		 <div class="col-md-3 join-link">
				<a href="form.php">Join Us</a>
		 </div>
		  <div class="clearfix"></div>
	 </div>
</div>


<!-- /about section -->

	








<?php include ("foot.php") ?>;






<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>





<!-- /js for portfolio -->

</script>
<!-- /js for about section -->
<!-- js for banner -->
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- /js for banner -->
<!-- js for navigation -->
<script src="js/classie.js"></script>
<script src="js/demo1.js"></script>
<!-- /js for navigation -->

<!-- /js files -->
</body>
</html>
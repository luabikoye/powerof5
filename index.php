<?php
session_start();
if($_GET['ref'])
{
	$_SESSION['ref'] = $_GET['ref'];
}
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
<!-- banner section -->
<?php include ("top.php") ;?>
<!-- /banner section -->
<!-- about section -->
<section class="about">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h2>About Us</h2>
			<p>What does <strong>PowerOf5</strong> mean? Power is a five letter words, it stands as a symbol  of power is human fist which comprises of five fingers, without the five  fingers together a fist can never be form. This simple illustration indicates  that you and I together can make a strong fist in making our works easier and  efficient for ourselves. <br><a class="btn btn-primary" href="about.php">Read more</a>
		</div>
	</div>
</section>


<section class="about-lower">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12">
			   
			<p>To participate in this, a onetime entry payment of N1,200 is required, and you will be  <br> given a mathematics hand booklet with a video cd that contain an explanation of the mathematics hand booklet</p>
            <h2>REFER SOMEONE?</h2>
		</div>
	</div>
</section>
<!-- /about section -->

<!-- /how it works-->
<div class="howit">
		<div class="container">
			<div class="howit-heading">
				<h2>How it works</h2>
				<!--<h5>Just in 4 steps</h5>-->
			</div>
			<div class="howit-grids">
				<div class="col-md-3 howit-grid">
					<div class="hi-icon-wrap hi-icon-effect-2">
						<div class="hi-icon ">
							<p class="scope">1</p>
						</div>
					</div>
					<div class="howit-grid-heading">
						<h3>DISTRIBUTION</h3>
						<p>When you pay a one-time signup fee of N1,200 for the package, you will become a member. </p>
					</div>
				</div>
				<div class="col-md-3 howit-grid">
					<div class="hi-icon-wrap hi-icon-effect-3">
						<div class="hi-icon">
							<p class="scope">2</p>
						</div>
						<div class="howit-grid-heading">
							<h3>MANAGER</h3>
							<p>The SECOND STAGE is to encourage the 5 people you brought in, to also bring their own five people each.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 howit-grid">
					<div class="hi-icon-wrap hi-icon-effect-4">
						<div class="hi-icon ">
							<p class="scope">3</p>
						</div>
						<div class="howit-grid-heading">
							<h3>SENIOR MANAGER</h3>
							<p>when the 5 people you introduce turns MANAGERS, you will become SENIOR MANAGER.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 howit-grid">
					<div class="hi-icon-wrap hi-icon-effect-5">
						<div class="hi-icon">
							<p class="scope">4</p>
						</div>
						<div class="howit-grid-heading">
							<h3>DIRECTOR</h3>
							<p>when the 5 people you introduce turns SENIOR MANAGERS you will become DIRECTOR.</p>
						</div>
					</div>
				</div>
               <div class="clearfix"> </div>
           </div>
            
            <a href="how-it-works.php">Read More</a>
            
        </div>
        
	</div>
<!-- /how it works-->


	<div class="video" style="background:#CCC; text-align:center; padding-top:40px; padding-bottom:40px;">
	<div class="container">
    <div class="row late">
    <h3>Our Video</h3>
        	<div class="col-md-12">
            	            	<iframe width="80%" height="450" style="border:4px solid #000000 !important;" src="http://www.youtube.com/embed/OueDT76VoEg?rel=0">
				</iframe>
            </div>
        	</div>
        </div>
    </div>



<div class="relax">
<div class="container">
<img class="img-responsive" src="images/rp.png" alt="">
<p>Sit back & relax while we manage your plan</p>
<a href="form.php">Join us now</a>
</div>
</div>

<section class="users">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h2>What our users say</h2>
			<p><img src="images/d-qt1.png">&nbsp;&nbsp;This is the best network I have joined, and most importantly, I getting more value from learning mathematics from the Master ~ Dayo Abikoye&nbsp;&nbsp;<img src="images/d-qt.png"></p>
            
		</div>
	</div>
</section>


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




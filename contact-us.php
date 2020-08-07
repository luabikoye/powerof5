<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Power of 5</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Affluence Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
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
        	<h1>Contact Us</h1>
            	<img src="images/con_banner.jpg" class="img-responsive" alt="best-political-consulting-firms">
            </div>
        </div>
    </div>
</div>



<div class="contact">
		
		<div class="contact-form">
			<div class="container">		
				<h3 class="hdng">Contact Us</h3><?php if($error){?><div class="alert-danger" style="padding:10px;"><?php echo $error; ?></div><?php } ?>
		        	<?php if($correct){?><div class="alert-success" style="padding:10px;"><?php echo $correct; ?></div><?php } ?>
				<div class="contact-grids-info">
					<div class="col-md-7 contact-right">				
						<form method="post" action="proc-contact.php">
							<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
							<input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
							<input type="text" name="phone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required>
							<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
							<input type="submit" value="Submit" >
						</form>
					</div>
					<div class="col-md-5 contact-left">
						<p>You can reach us with any of information below</p>
						<ul>
							<li><span class="glyphicon3 glyphicon-map-marker" aria-hidden="true"></span>
								148 Lagos Road, Ikorodu, Lagos Nigeria
							</li>					
							<li><span class="glyphicon3 glyphicon-earphone" aria-hidden="true"></span>
								+234 903 496 5851, +234 803 813 9987
							</li>
							<li><span class="glyphicon3 glyphicon-envelope" aria-hidden="true"></span>
								<a href="mailto:info@powerof5ng.com">info@powerof5ng.com</a>
							</li>
						</ul>
					</div>						
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>		
        
        <div class="container">		
			<h3 class="hdng"><br><br>How to Find Us</h3>
			<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.920251505703!2d3.3650638143152922!3d6.531756095275549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8db1a5a04ddf%3A0xee573e7a7f9c372e!2s148+Ikorodu+Rd%2C+Lagos!5e0!3m2!1sen!2sng!4v1497908664216" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
		</div>	
</div>
<!---->






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
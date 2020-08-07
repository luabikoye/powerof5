<?php

session_start();
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');
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
        	<h1>Join Us Now</h1>
            	<img src="images/abt_banner.jpg" class="img-responsive" alt="best-political-consulting-firms">
            </div>
        </div>
    </div>
</div>





<!---->

<div class="test-booking">
				<div class="container">
                <div class="row">
					<h3 class="last-updated">Change Password</h3><br><br></div>
                    <div class="clearfix"></div>
					<div class="text-booking-form">
                    <?php if($error){ echo '<div class="alert-danger mymsg">'.$error.'</div>'; } ?>
                    <?php if($correct){ echo '<div class="alert-success mymsg">'.$correct.'</div>'; } ?>
						<div class="col-md-8 text-booking-form-left">
							<form action="proc-password.php" method="post" enctype="multipart/form-data">
								<label>Enter Password <span>*</span></label>
									<input type="password" name="password" class="phone">
									<div class="clearfix"></div>
                                    
                                    <label>Retype Password<span>*</span></label>
									<input type="password" name="confirm" class="phone">
									<div class="clearfix"></div>
                                    
                                
								<div class="clearfix"></div>
									
									<div class="book-submit">
										<input type="submit" value="Change Password">
									</div>
							</form>
						</div>
						
						<div class="clearfix"></div>
					</div>
					
					
				</div>
			</div>

<!-- /-->

	








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
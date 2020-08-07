<?php
session_start();
require_once('admin/pages/fns.php');
if($_GET['ref'])
{
	$_SESSION['ref'] = $_GET['ref'];
	$ref_user = $_GET['ref'];
}
if($_SESSION['ref'])
{
	$ref_user = $_SESSION['ref'];
}
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




<div class="contact">
		
		<div class="contact-form">
			<div class="container">		
				<h4 class="hdng"><?php if($_GET['session']=='out'){ echo '<div class="alert-danger mymsg">Your session has timed out. Kindly login again or start a fresh registration if you do not have an account yet.</div>'; } ?></h4>
				<div class="contact-grids-info">
					<div class="col-md-6 contact-right">				
						<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="proc-login.php" method="post">
											<h3>Signin with your account </h3>
											<p>Login to see your earnings, downlines and perfomance on our platfom<br>
										 <?php if($loginerror){ echo '<div class="alert-danger mymsg">'.$loginerror.'</div>'; } ?> </p>
											<input type="text" name="username" value="Enter your Username or Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Username or Email';}" required style="margin-top:44px;">	
											<input name="password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>	
											<h4><a href="#">Forgot password</a></h4>
											<div class="single-bottom">
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
                                             
											<input type="submit" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								
							</div>
						</div>
					
                    
                    
                    
					<div class="col-md-6 contact-left">
                    <div id="signup_img"><a id="signup_link"><img src="images/reg.jpg" class="img-responsive"></a></div>
							<div class="login-grids" id="signup_form">
										<div class="login">
											<div class="login-right">
								<form action="proc-form.php" method="post" enctype="multipart/form-data">
													<h3>Create your account </h3>
													<p>Please note that you will be required to make payment for the plan you want to register with. Payments can only be made online.</p>
                                                    <?php if($error){ echo '<div class="alert-danger mymsg">'.$error.'</div>'; } ?>
                                                    <?php if($_GET['pay']=='failed'){ echo '<div class="alert-danger mymsg">Your registration was unsuccessful because your payment failed. Try a different card.</div>'; } ?>
													<input type="text" name="firstname" value="Firstname Lastname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Firstname Lastname';}" required>
													<input type="text" name="mphone"value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required>
													<input type="text" name="email" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required>
													<input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required>	
													<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
                                                    <select name="plan" style="margin-top:20px; margin-bottom:0px; width:100%" required>
                                                    <option value="">Choose Plan</option>
                                                    <option value="classic">Classic - N<?php echo number_format(plan_price('classic')); ?></option>
                                                    <option value="premium">Premium - N<?php echo number_format(plan_price('premium')); ?></option>
                                                    </select>
													<input type="text" name="ref_user" value="<?php if($ref_user) {echo $ref_user; }else { echo 'Reference Username'; } ?>" onblur="if (this.value == '') {this.value = 'Reference Username';}">	
													<input type="submit" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
									</div>
								</div>
							</section>
					</div>
				</div>
					</div>						
					<div class="clearfix"> </div>
				</div>
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




<script language="javascript">
$(function() {
	<?php if($error)
	{
		?>
	$('#signup_form').show();
	$('#signup_img').hide();
	<?php }
	else
	{
	
	?>
	
	$('#signup_form').hide();
	<?php
	}
	?>
	$('#signup_link').click(function(){
		$('#signup_img').hide();
		$('#signup_form').show(30);
	})
});
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
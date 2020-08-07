

<div id="inner_menu">
	<nav class="navbar navbar-default">
        <div class="container">
        	<div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
             <a href="index.php"><img src="images/logo.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav ">
                    <li><a href="./">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="how-it-works.php">How It Works</a></li>  
                    
                    <li><a href="contact-us.php">Contact Us</a></li>    
               <?php if(!isset($_SESSION['loggedin']))
{
	?>     
			<li class="grad"><a href="form.php">Sign Up/Login</a></li> 
		<?php
}else
{
	?>
    
    
    
    			     
				<li class="dropdown">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Network Details<span class="caret"></span></a>
					  <ul class="dropdown-menu">
					  <li><a href="genealogy.php">Genealogy</a></li>
					  <li><a href="downlines.php">My Downlines</a></li>
					  <li><a href="profile-update.php?update=update">Update Pofile</a></li>
					  <li><a href="change-password.php">Change Password</a></li>
						<li><a href="my-earnings.php"> My Earnings</a></li>
						<li><a href="a1.pdf"> Download E-book</a></li>
						
					  </ul>
                      
					</li>
    
            
			<li class="grad"><a href="logout.php">Logout</a></li> 
    
    <?php } ?>
			
            
                    
                    
                    
                                     
                </ul>
            </div>
            </div>      
            </div>      
            
        </div><!--/.container-->
    </nav><!--/nav-->
</div>


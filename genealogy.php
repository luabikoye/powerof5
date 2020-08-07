<?php
session_start();
include('session-admin.php');
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');

if($_GET['u'])
{
	$url_user = base64_decode($_GET['u']);
	
	$query = "select * from profileupdate where ref_user = '".$url_user."'";
}
else{
$query = "select * from profileupdate where ref_user = '".$_SESSION['loggedin']."' and plan = '".$_SESSION['plan']."'";
}

$result = mysql_query($query);
$num = mysql_num_rows($result);

for($i=0; $i<$num; $i++)
{
	$row = mysql_fetch_array($result);
	$fullname = '<a href="?u='.base64_encode($row['username']).'">'.$row['firstname'].' '.$row['lastname'].'</a>';
	$data[] = "['".$fullname." (".$row['username'].")', '".$row['ref_user']."']";	
}

if(isset($data))
{ 
	$user_list = implode(',',$data);
}

?>
<!DOCTYPE HTML>
<html>
<head>
 
   <script type='text/javascript' src='https://www.google.com/jsapi'></script>  
   <script type='text/javascript'>  
    google.load('visualization', '1', {packages:['orgchart']});  
    google.setOnLoadCallback(drawChart);  
    function drawChart() {  
     var data = new google.visualization.DataTable();  
     data.addColumn('string', 'Node');  
     data.addColumn('string', 'Parent');  
     data.addRows([  
     /* ['Olumide (Lumi)', ''],  
      ['Sile Adekoya (Sile101)', 'Olumide (Lumi)'],  
      ['Femi Oduola (Tola)', 'Olumide (Lumi)']  */
	  <?php echo $user_list; ?> 
     ]);  
     var chart = new google.visualization.OrgChart(document.getElementById('chart_div')); 
	 chart.draw(data, {allowHtml:true}); 
    }  
   </script>  
   
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
        	<h1>Genealogy (<?php echo ucwords($_SESSION['plan']); ?> Plan)</h1>
            	<img src="images/abt_banner.jpg" class="img-responsive" alt="best-political-consulting-firms">
            </div>
        </div>
    </div>
</div>



<div class="about">
	 <div class="container">
                	<div class="about-grids">
		 	<div class="row">
            	<div class="col-md-3">
                <?php include('dp-side.php'); ?>   
             
                </div>
                <div class="col-md-9">
					<div class=""><h3><?php if($_GET['u']) { echo ucwords($url_user)."'s"; } else{ echo 'My'; } ?> Genealogy (<?php echo number_format($num); ?>)</h3> <br><br></div>
        <?php if($updated == 'yes')
		{
			?>
         	<span class="alert-success" style="padding:5px;">You profile update has been saved</span>  
		   <br><br><div class="clearfix"></div>	 
            <?php	
		}
		?>
         
         <div id='chart_div'></div>  
					<div style="margin-top: 50px;"><a href="javascript:history.back()" class="btn btn-primary">Go back</a></div>
		   <div class="clearfix"></div>			 
		 </div>
                </div>
            </div>
		 <div class="charitys abt-chrits">
		   <div class="clearfix"></div>
		 </div>
		 
		
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

<script src="js/my-js.js"></script>
</body>
</html>
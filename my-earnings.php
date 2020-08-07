<?php
session_start();
include('session-admin.php');
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');


$query = "select * from profileupdate where username = '".$_SESSION['loggedin']."' and plan = '".$_SESSION['plan']."'";
$result = mysql_query($query);
$num = mysql_num_rows($result);
$row = mysql_fetch_array($result);

if($_GET['correct'])
{
	$correct = 'User account has been updated successfully with appropriate amount added to earnings.';
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
     chart.draw(data);  
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
        	<h1>My Earnings (<?php echo ucwords($_SESSION['plan']); ?> Plan)</h1>
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
                <div class="">
                  <h3>My Earnings </h3><br><br></div><?php if($error)
            {
                ?>
                  <div class="text-danger" style="margin-bottom:10px;"><span class="glyphicon glyphicon-remove"></span> <?php echo $error; ?></div> 
                  
                  <?php } ?>
                  
                   <?php if($correct)
            {
                ?>
                  <div class="text-success" style="margin-bottom:10px;"><span class="glyphicon glyphicon-ok"></span> <?php echo $correct; ?></div> 
                  
                  <?php } ?>
       
		<div class="col-md-6">
        <table class="table table-striped table-bordered">
        	<tr>
            	<th>Description</th>
                <th>Amount (&#8358;)</th>
            </tr>
        	<tr>
            	<td>Total Amount Credited</td>
                <td><?php echo number_format(sum_amount($_SESSION['loggedin'],'CREDIT'),2); ?></td>
            </tr>
        	<tr>
            	<td>Amount Paid</td>
                <td><?php echo number_format(sum_amount($_SESSION['loggedin'],'DEBIT'),2); ?></td>
            </tr>
        	<tr>
				<td class="text-success"><strong>Processed Payment</strong></td>
				<td class="text-success"><strong><?php echo number_format($row['processed_payment'],2); ?></strong></td>
            </tr>
        	<tr>
            	<td>Available Amount</td>
                <td><?php echo number_format($row['total_earnings'],2); ?></td>
            </tr>
        </table>
        <a href="request_payment.php?id=<?php echo $row['id']; ?>&a=<?php echo base64_encode($row['total_earnings']); ?>&u=<?php echo base64_encode($row['username']); ?>" class="btn btn-danger" onclick="return confirm('If you click OK, you are confirming you want the payment of &#8358; <?php echo number_format($row['total_earnings']); ?>. Kindly note that this action is not reversable and funds will be moved to Process payment till you receive an alert in your bank account.')" <?php btn_active($row['total_earnings']); ?> >Request Payment</a>
        </div>
         
		   <div class="clearfix"></div>		
		   
		   	  <div class="row">
                  <h3 style="margin-top: 30px;">Payments Breakdown </h3><br><br></div>
       
		<div class="col-md-12">
        <table class="table table-striped table-bordered">
        	<tr>
            	<th>S/N</th>
            	<th>Date / Time</th>
            	<th>Description</th>
                <th>Amount (&#8358;)</th>
                <th>Transaction Type</th>
            </tr>
            <?php
			$query = "select * from payments where username = '".$_SESSION['loggedin']."'";
			$result = mysql_query($query);
			$num = mysql_num_rows($result);
			for($i=1; $i<=$num; $i++)
			{
				$row = mysql_fetch_array($result);
			?>
        	<tr>
            	<td><?php echo $i; ?></td>
            	<td><?php echo show_date($row['date_time']); ?></td>
            	<td><?php echo $row['description']; ?></td>
                <td><?php echo number_format($row['amount'],2); ?></td>
            	<td><?php echo $row['transaction_type']; ?></td>
            </tr>
            <?php
			}
			?>
        </table>
       
        </div>
         
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
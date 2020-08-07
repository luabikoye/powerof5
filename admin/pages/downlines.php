<?php 
session_start();

include('administrator-session.php');
include('connect.php');
require_once('fns.php');


if($_GET['u'])
{
	$url_user = ($_GET['user']);
	
	$query = "select * from profileupdate where ref_user = '".$url_user."'";
}
else{
$query = "select * from profileupdate where ref_user = '".$_GET['user']."' and plan = '".$_GET['plan']."'";
}

$result = mysql_query($query);
$num = mysql_num_rows($result);

for($i=0; $i<$num; $i++)
{
	$row = mysql_fetch_array($result);
	$fullname = '<a href="?user='.($row['username']).'&id='.($row['id']).'&plan='.($row['plan']).'">'.$row['firstname'].' '.$row['lastname'].'</a>';
	$data[] = "['".$fullname." (".$row['username'].")', '".$row['ref_user']."']";	
}

if(isset($data))
{ 
	$user_list = implode(',',$data);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="favicon.ico" />	<title>Power of 5 - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
</head>

<body>

    <div id="wrapper">

    <?php include('top-nav.php'); ?>

            <?php include('my-nav.php'); ?>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Downlines & Geneology (<?php echo $_GET['user']; ?>)</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
 

                <div class="row">
                <div class="col-md-6 col-sm-12">
						   <h2>Geneology</h2>
                    
                             <div id='chart_div'></div>
                             
					<div style="margin-top: 30px;"><a href="javascript:history.back();" class="btn btn-primary">Go back</a></div>                 
                        
                       </div>
                       
                       
                       <div class="col-md-6 col-sm-12">
						   <h2>Downlines</h2>
                       
                       <ul class="list-group">
         	<li class="list-group-item list-group-item-info"><?php echo col_val('profileupdate', 'username', $_GET['user'], 'firstname'); ?> <?php echo col_val('profileupdate', 'username', $_GET['user'], 'lastname'); ?> (<?php echo $_GET['user']; ?>)</li>
            <?php
			$query = "select * from profileupdate where ref_user = '".$_GET['user']."' and plan = '".$_GET['plan']."' and id > '".$_GET['id']."'";
$result = mysql_query($query);
$num = mysql_num_rows($result);
			for($i=0; $i<$num; $i++)
			{
				$row = mysql_fetch_array($result)
			?>
            <li class="list-group-item"><?php echo $row['firstname'].' '.$row['lastname'].' ('.$row['username'].')'; ?> -> <?php echo count_refs($row['username'])?> downlines</li>
            <?php } ?>
         </ul>
    
                       </div> 
                
                </div>
                        
                      
                       

                </div>

            </div>
            <!-- /.container-fluid -->

            
            
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>

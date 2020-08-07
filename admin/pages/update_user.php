<?php 
session_start();

include('administrator-session.php');
include('connect.php');
require_once('fns.php');

if(isset($_GET['id']))
{
	$id = base64_decode($_GET['id']);
	$username = base64_decode($_GET['username']);
}

$query = "select * from profileupdate where id = '$id'";
$result = mysql_query($query);
$num=mysql_num_rows($result);
$row=mysql_fetch_array($result);

$plan = $row['plan'];




?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="favicon.ico" />	<title>Outsource HR</title>

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
                        <h1 class="page-header">Update User Account</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <h3>Upgrade <?php echo $row['firstname'].' '.$row['lastname'].'('.$row['username'].')'; ?></h3>


                <div class="col-md-6 col-sm-12">
                Change Level<br><br>
                <?php if($error)
            {
                ?>
                  <div class="text-danger" style="margin-bottom:10px;"><span class="glyphicon glyphicon-remove"></span> <?php echo $error; ?></div> 
                  
                  <?php } ?>
                  
                   <?php if($correct)
            {
                ?>
                  <div class="text-success" style="margin-bottom:10px;"><span class="glyphicon glyphicon-ok"></span> <?php echo $correct; ?></div> 
                  
                  <?php } ?>
                    <form action="proc-update-user.php" method="post" enctype="multipart/form-data" >
                        <div class="form-group input-group">
                            <span class="input-group-addon">Choose new level</span>
                            <select name="level" class="form-control">
                            <?php
								if($row['level']!='')
								{
									?>
								<option value="<?php echo $row['level']; ?>"><?php echo stage_name($row['level']); ?></option>
									<?php } ?>
								<option value="">-------------------------</option>
								<option value="1">Stage 1 (Distributor)</option>
								<option value="2">Stage 2 (Manager)</option>
								<option value="3">Stage 3 (Senior Manager)</option>
								<option value="4">Stage 4 (Director)</option>
								<option value="5">Stage 5 (Silver Director)</option>
								<option value="6">Stage 6 (Gold Director)</option>
								<option value="7">Stage 7 (Diamond Director)</option>
                            
							</select>
                        </div>
                       
                        
                        
                        <div class="form-group input-group">
                           <input type="hidden" name="id" value="<?php echo $id; ?>">
                           <input type="hidden" name="username" value="<?php echo $username; ?>">
                           <input type="hidden" name="plan" value="<?php echo $plan; ?>">
                           <input type="hidden" name="current_level" value="<?php echo $row['level']; ?>">
                            <input type="submit" class="btn btn-primary" value="Upgrade User Level" onClick="return confirm('Changing level will automatically move funds to the user accounts. Are you sure you want to take this action?')">
                        </div>

                    </form>
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

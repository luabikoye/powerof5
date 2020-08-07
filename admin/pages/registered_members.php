<?php 
session_start();
include('administrator-session.php');
include('connect.php');
require_once('fns.php');


if($_GET['suspended'])
{
	$query = "select * from profileupdate where status = 'suspended' order by id DESC";
}
elseif($_POST['search_user'])
{
	$query = "select * from profileupdate where username like '%".$_POST['search_user']."%' order by id DESC";
}
elseif($_GET['status'] == 'pending')
{
	$query = "select * from profileupdate where status != 'active' order by id DESC";
}
elseif($_GET['plan'] == 'classic')
{
	$query = "select * from profileupdate where status = 'active' and plan = 'classic' order by id DESC";
}
elseif($_GET['plan'] == 'premium')
{
	$query = "select * from profileupdate where status = 'active' and plan = 'premium' order by id DESC";
}
else
{	
	$query = "select * from profileupdate where status = 'active' order by id DESC";
}
$result = mysql_query($query);
$num=mysql_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
   <!-- <link rel="shortcut icon" href="favicon.ico" />-->
    	<title>Power Of 5 Admin.</title>

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
    <link href="../dist/css/datepicker.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script language="javascript" src="ckeditor\ckeditor.js"></script>
 

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
                        <h1 class="page-header">Registered Member List</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

              

            </div>
            <!-- /.container-fluid -->
            <div>
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
            </div>
<div class="row">
            <form action="registered_members.php" method="post">  <span>Search by Username</span> <input type="text" class="form-control" placeholder="Enter username" name="search_user" style="width: 30%;"> <br><input type="submit" value="Search" class="btn btn-primary"></form>
			</div>
             <div class="row" style="margin-top:50px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
							
                           <a href="export.php?sql=<?php echo $query; ?>" class= "btn btn-warning">Export Data</a>
                         <?php echo 'Total Records '.number_format($num); ?>  </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Username</th>
                                            <th>Level / Stage</th>
                                            <th>Contact Number</th>
                                            <th>No. Ref / Downlines</th>
                                            <th>Date Registered</th>
                                            <th>Payment Due</th>
                                            <th>Sponspor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php
for($i=0; $i<$num; $i++)
{
    $row = mysql_fetch_array($result)
?>
                                        <tr class="odd gradeX">
                                            <td><a href="#" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>"><?php echo $row['firstname'].' '.$row['lastname']; ?></a><br>(<?php  echo $row['status']; ?>)
                                            
                                            <div id="myModal<?php echo $row['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $row['username']; ?></h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
        <tr>
        	<td>Fullname</td><td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
        </tr>
        <tr>
        	<td>Email</td><td><?php echo stripslashes($row['email']); ?></td>
        </tr>
        <tr>
        	<td>Mobile </td><td><?php echo stripslashes($row['mphone']); ?></td>
        </tr>
        <tr>
        	<td>Plan</td><td><?php echo stripslashes(ucwords($row['plan'])); ?></td>
        </tr>
        <tr>
        	<td>Date of Birth</td><td><?php echo stripslashes($row['dob']); ?></td>
        </tr>
        <tr>
        	<td>Address</td><td><?php echo stripslashes($row['address']); ?></td>
        </tr>
        <tr>
        	<td>City, State, Countru</td><td><?php echo stripslashes($row['city']); ?>, <?php echo stripslashes($row['state']); ?>, <?php echo stripslashes($row['country']); ?></td>
        </tr>
        <tr class="text-danger">
			<td>Reference Username</td><td><form action="proc-change-user.php" method="post"><input name="ref_user" type="text" class="form-control" style="width:50%; float: left; margin-right: 5px;" value="<?php echo stripslashes($row['ref_user']); ?>"> <input type="hidden" value="<?php echo $row['username'] ?>" name="username"> <input type="submit" id="btn_userchange" value="Change" class="btn btn-primary" onClick="return confirm('Are you sure you want to change the user reference?')"></form></td>
        </tr>
        <tr class="text-danger">
        	<td>Sponsor</td><td><?php echo stripslashes($row['nomineen']); ?></td>
        </tr>
        <tr class="text-danger">
        	<td>Sponsor Relationship</td><td><?php echo stripslashes($row['nomineerel']); ?></td>
        </tr>
        <tr class="text-danger">
        	<td>Bank Name</td><td><?php echo stripslashes($row['bankname']); ?></td>
        </tr>
        <tr class="text-danger">
        	<td>Account Number</td><td><?php echo stripslashes($row['acctnbr']); ?></td>
        </tr>
        <tr class="text-danger">
        	<td>Beneficiary Name</td><td><?php echo stripslashes($row['beneficiary']); ?></td>
        </tr>
        <tr>
        	<td>Level</td><td><?php echo stage_name($row['level']); ?></td>
        </tr>
        <tr>
        	<td>Total Amount Due</td><td>&#8358;<?php echo number_format($row['total_earnings'],2); ?></td>
        </tr>
        <tr>
        	<td></td>
            <td></td>
        </tr>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                                            
                                            </td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo get_level($row['username']); ?></td>
                                            <td><?php echo $row['mphone']; ?></td>
											<td><a href="downlines.php?id=<?php echo $row['id']; ?>&user=<?php echo $row['username']; ?>&plan=<?php echo $row['plan']; ?>"><?php echo count_refs($row['username']); ?> / <?php echo count_downlines($row['username'], $row['id']); ?></a></td>
                                           <td><?php echo short_date($row['date']); ?></td>
                                           <td><?php echo $row['total_earnings']; ?></td>
                                            <td><?php echo strtoupper($row['ref_user']); ?></td>
                                            <td>
                                                
                                                <? if($_GET['suspended'])
												{ ?>  
                                                <a href="del_btn.php?id=<?php echo base64_encode($row['id']) ?>&tab=<?php echo base64_encode('profileupdate'); ?>&return_url=<?php echo base64_encode('registered_members.php'); ?>"><input type="button" value="Restore" onclick="return confirm('Are you sure you want to restore user?');"></a>                                           <?php } else { ?>  
                                                                                    
                                            <a href="update_user.php?id=<?php echo base64_encode($row['id']) ?>&username=<?php echo base64_encode($row['username']); ?>"><input type="button" value="Upgrade" onclick="return confirm('Clicking OK means you want to view geneology or change the users level and amount earned. Are you sure you want to update user?');"></a>  
                                                                                    
                                            <a href="del_btn.php?id=<?php echo base64_encode($row['id']) ?>&tab=<?php echo base64_encode('profileupdate'); ?>&return_url=<?php echo base64_encode('registered_members.php'); ?>&restore=<?php echo base64_encode('yes'); ?>"><input type="button" value="Suspend" onclick="return confirm('Are you sure you want to suspend user?');"></a>                                             
                                             <?php } ?>
                                            </td>
                                        
                                        </tr>
<?php
}
?>

                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /.col-lg-6 -->
                
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            
            </div>
            <!-- /.row -->
            
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
    <script src="../dist/js/bootstrap-datepicker.js"></script>
    
  

</body>

</html>
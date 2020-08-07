<?php 
session_start();
include('administrator-session.php');
include('connect.php');
require_once('fns.php');


if($_POST['search_user'])
{
	$query = "select * from pending_payments where username like '%".$_POST['search_user']."%' order by id DESC";
}
elseif($_GET['status'] == 'paid')
{
	$query = "select * from pending_payments where status = 'paid' order by id DESC";
}
else
{	
	$query = "select * from pending_payments where status = 'unpaid' order by id DESC";
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
    
    
    
    
<script language="javascript" src="jquery.js"></script>
    <script language="javascript">
$(document).ready(function() {

var MaxInputs       = 36; //maximum input boxes allowed
var InputsWrapper   = $("#InputsWrapper"); //Input boxes wrapper ID
var AddButton       = $("#AddMoreFileBox"); //Add button ID

var x = InputsWrapper.length; //initlal text box count
var FieldCount=1; //to keep track of text box added

$(AddButton).click(function (e)  //on add input button click
{
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++; //text box added increment
            //add input box
           // $(InputsWrapper).append('<div><input type="text" name="mytext[]" id="field_'+ FieldCount +'" value="Text '+ FieldCount +'"/><a href="#" class="removeclass">&times;</a></div>');
		   
		   $(InputsWrapper).append('<div class="form-group input-group"><span class="input-group-addon">Size</span><input type="text" name="size[]" class="form-control small_text"><span class="input-group-addon">Quantity</span><input type="text" name="quantity[]" class="form-control small_text"></div>');   
            x++; //text box increment
        }
return false;
});

$("body").on("click",".removeclass", function(e){ //user click on remove text
        if( x > 1 ) {
                $(this).parent('div').remove(); //remove text box
                x--; //decrement textbox
        }
return false;
}) 

});
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
                        <h1 class="page-header">Payment List</h1>
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
            <form action="pending_payments.php" method="post">  <span>Search by Username</span> <input type="text" class="form-control" placeholder="Enter username" name="search_user" style="width: 30%;"> <br><input type="submit" value="Search" class="btn btn-primary"></form>
			</div>


             <div class="row" style="margin-top:50px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                           <a href="export.php?sql=<?php echo $query; ?>" class= "btn btn-warning">Export Data</a>
							<?php echo 'Total Records '.number_format($num); ?>    </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date / Time</th>
                                            <th>Amount</th>
                                            <th>Bank</th>
                                            <th>Account</th>
                                            <th>Beneficiary</th>
                                            <th>Status</th>
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
                                           
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo show_date($row['date_time']); ?></td>
                                           <td>&#8358; <?php echo number_format($row['amount']); ?></td><td><?php echo col_val('profileupdate','username',$row['username'],'bankname'); ?></td>
                                           <td><?php echo col_val('profileupdate','username',$row['username'],'acctnbr'); ?></td>
                                           <td><?php echo col_val('profileupdate','username',$row['username'],'beneficiary'); ?></td>
                                           
                                           <td><?php echo $row['status']; ?></td>
                                            <td>
                                                
                                                <? if($row['status'] == 'unpaid')
												{ ?>  
                                                <a href="status_btn.php?id=<?php echo base64_encode($row['id']) ?>&u=<?php echo base64_encode($row['username']); ?>&a=<?php echo base64_encode($row['amount']); ?>&tab=<?php echo base64_encode('pending_payments'); ?>&return_url=<?php echo base64_encode('pending_payments.php'); ?>"><input type="button" value="Clear Payment" onclick="return confirm('Are you sure you have paid this user?');"></a>                                           <?php } else { ?>   
                                                                                    
                                            <a href="status_btn.php?id=<?php echo base64_encode($row['id']) ?>&u=<?php echo base64_encode($row['username']); ?>&a=<?php echo base64_encode($row['amount']); ?>&tab=<?php echo base64_encode('pending_payments'); ?>&return_url=<?php echo base64_encode('pending_payments.php'); ?>&restore=<?php echo base64_encode('yes'); ?>"><input type="button" value="Restore" onclick="return confirm('Are you sure you want to restore user?');"></a>                                             
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
    
    <script>
	$(function(){
	   $('.datepicker').datepicker({
		  format: 'yyyy-mm-dd'
		});
	});
	</script>

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
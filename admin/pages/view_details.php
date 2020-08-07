<?php 
session_start();
include('administrator-session.php');
include('connect.php');
require_once('fns.php');


$query_pro = "select * from oldstudent where id = '".base64_decode($_GET['q'])."'";
$result_pro = mysql_query($query_pro);
$num_pro = mysql_num_rows($result_pro);
$row_pro = mysql_fetch_array($result_pro);

$title = $row_pro['title'];
$firstname = $row_pro['firstname'];
$middle = $row_pro['middle'];
$surname = $row_pro['surname'];
$whilst = $row_pro['whilst'];
$dob = $row_pro['dob'];
$address = $row_pro['address'];
$telephone = $row_pro['telephone'];
$mobile = $row_pro['mobile'];
$email = $row_pro['email'];
$occupation = $row_pro['occupation'];
$job = $row_pro['job'];
$p_code = $row_pro['p_code'];
$state = $row_pro['state'];
$membership = $row_pro['membership'];
$association = $row_pro['association'];
$terms = $row_pro['terms'];
$cv_resume = $row_pro['cv_resume']


?>
<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
  <!--  <link rel="shortcut icon" href="favicon.ico" />-->
    	<title>Power Of 5 Admin - Admin Area</title>

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
                <div class="col-md-12 col-sm-12" style="margin-top:50px;">
                <form class="form-horizontal"  enctype="multipart/form-data" name="v_apply" id="v_apply" action="proc_apply.php" method="post">
                
                <div class="error_log">
                <?php if($error)
                    {
                ?>
                      <div class="text-danger" style="margin-bottom:10px;">
                      <span class="glyphicon glyphicon-remove"></span> <?php echo $error; ?>
                      </div>
                
                <?php } ?>
                
                <?php if($correct)
                    {
                ?>
                      <div class="text-success" style="margin-bottom:10px;">
                      <span class="glyphicon glyphicon-ok"></span> <?php echo $correct; ?>
                      </div>
                
                 <?php } ?>
                </div>
               
                <div class="col-md-6"></div>
                <div class="col-md-6">
               
               <div class="row" style="margin-bottom: 10px;">
                        
                        	<div class="col-md-4">
                            <img src="../../<?php echo $cv_resume; ?>" width="300" height="300">            	
                             
                               
                            </div>
                            <div class="col-md-8">
                            	<strong>&nbsp;</strong>
                            </div>
                        	</div>
                            </div><br><br><br><br><br><br>
                            
               

                
                <div class="col-md-6" style="padding-top:30px;">
                        	<div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>First Name:</strong>
                            </div>
                        	<div class="col-md-8">
                            	<?php echo $firstname; ?>
                            </div>
                        	</div>
                            
                        	<div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Middle:</strong>
                            </div>
                        	<div class="col-md-8">
                            	<?php echo $middle; ?>
                            </div>
                        	</div>
                            
                        	<div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Surname:</strong>
                            </div>
                        	<div class="col-md-8">
                            	<?php echo $surname; ?>
                            </div>
                        	</div>     
                            
                            
                            <div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Surname whilst at Ikeja High School (if different from above):</strong>
                            </div>
                        	<div class="col-md-8">
                            	<?php echo $whilst; ?>
                            </div>
                        	</div>
                            
                            
                            
                            <div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Date of Birth:</strong>
                            </div>
                        	<div class="col-md-8">
                            	<?php echo $dob; ?>
                            </div>
                        	</div>
                            
                            
                            
                            <div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Current Address:</strong>
                            </div>
                        	<div class="col-md-8">
                            	<?php echo $address; ?>
                            </div>
                        	</div>
                            
                            
                            
                            
                            
                            
                                                   
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                  		<div class="col-md-6" style="padding-top:30px;">
                        	<div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Telephone Number:</strong>
                            </div>
                        	<div class="col-md-8">
                            	<?php echo $telephone; ?>
                            </div>
                        	</div>
                            
                        	<div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Mobile Number:</strong>
                            </div>
                        	<div class="col-md-8">
                            	<?php echo $mobile; ?>
                            </div>
                        	</div>
                            
                        	<div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Email Address:</strong>
                            </div>
                        	<div class="col-md-8">                            	
                            	<?php echo $email; ?>
                            </div>
                        	</div>  
                            
                            
                            <div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Occupation:</strong>
                            </div>
                        	<div class="col-md-8">                            	
                            	<?php echo $occupation; ?>
                            </div>
                        	</div>
                            
                            
                            <div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Job Title:</strong>
                            </div>
                        	<div class="col-md-8">                            	
                            	<?php echo $job; ?>
                            </div>
                        	</div>
                            
                            <div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Membership Type:</strong>
                            </div>
                        	<div class="col-md-8">                            	
                            	<?php echo $membership; ?>
                            </div>
                        	</div>
                            
                            
                            <div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Where did you hear about the Alumni Association:</strong>
                            </div>
                        	<div class="col-md-8">                            	
                            	<?php echo $association; ?>
                            </div>
                        	</div>
                            
                            
                            
                            <div class="row" style="margin-bottom: 10px;">
                        	<div class="col-md-4">
                            	<strong>Terms and Codition:</strong>
                            </div>
                        	<div class="col-md-8">                            	
                            	<?php echo $terms; ?>
                            </div>
                        	</div>
                            
                            
                           
                            
                            </div>
                            </form>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                
                    
                    

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
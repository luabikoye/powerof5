<?php 
session_start();
include('administrator-session.php');
include('connect.php');
require_once('fns.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="favicon.ico" />
<title>Workforce Recruitment Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

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
                        <h1 class="page-header">User Management</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <h3>Add Admin</h3>


                <div class="col-md-6 col-sm-12">
                Enter new admin login details<br><br>
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
                    <form action="proc-add-admin.php" method="post">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Firstname</span>
                                            <input name="firstname" type="text" class="form-control" value="<?php echo $firstname; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Lastname</span>
                                            <input name="lastname" type="text" class="form-control" value="<?php echo $lastname; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Email</span>
                                            <input name="email" type="text" class="form-control" value="<?php echo $email; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Username</span>
                                            <input name="username" type="text" class="form-control" value="<?php echo $username; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Password</span>
                                            <input name="password" type="text" class="form-control" value="<?php echo $password; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Priviledge</span>
                                           <select multiple name="priviledge[]" class="form-control">
                                                <option value="">Choose one</option>
                                                <option value="administrator">Admin</option>
                                                <option value="recruitment">Recruitment</option>
                                                <option value="staff_placement">Staff Placement</option>
                                                <option value="hr_operations">HR Operations</option>
                                                <option value="payroll">Payroll</option>
                                            </select>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="submit" class="btn btn-primary" value="Add User">
                                        </div>

                    </form>
                </div>

            </div>
            <!-- /.container-fluid -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

    <?php
	session_start();
require_once('admin/pages/fns.php');
	?>
      
<html>
<head>
	<title>Loading Paystack</title>
  <script src="https://js.paystack.co/v1/inline.js"></script>
</head>
<body onLoad="payWithPaystack()">
<?php include('analytics.php'); ?>
<h1 align="center"><br><img src="images/logo.png"><br><br></h1><h3 align="center">Transaction Page...please wait<br><br><img src="images/spinner.gif" width="80" height="60"><br><br><a href="form.php">Go Back to Home Page</a></h3>
</body>
</html>

<script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_78df4bee3a731315ec1034322870cfcd7ed9e95a',
	 // key: 'pk_live_0d62b8e4d3d9b6c7649b4d664f90158d0cf124c3', 
      email: '<?php echo base64_decode($_GET['e']); ?>',
      amount: <?php echo $_SESSION['total_price']; ?>00,
      ref: <?php echo base64_decode($_GET['i']); ?>,
      callback: function(response){
          alert('success. transaction ref is ' + response.trxref);
		  window.location.href = "process-registration.php?pay=<?php echo base64_encode('true'); ?>";
      },
      onClose: function(){
          window.location.href = "form.php?pay=failed";
      }
    });
    handler.openIframe();
  }
</script>
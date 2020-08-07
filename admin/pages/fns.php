<?php

include('connect.php');

date_default_timezone_set('Africa/Lagos');


define('DOWNLINE', 5);

/*
ACCOUNT SETUP FOR COMPANY THAT WILL BE USING THE PORTAL
*/
function host()
{
	return 'http://'.$_SERVER['HTTP_HOST'];
}

function company_logo()
{
	return host().'/images/logo.png';	
}

function company_name()
{
	return 'PowerOf5';	
}

function company_phone()
{
	return '+234 903 496 5851, +234 803 813 9987';	
}

function domain_name()
{
	return 'www.powerof5ng.com';	
}

function company_email()
{
	return 'info@powerof5ng.com';	
}

function global_amount()
{
	return 1200;	
}

function now()
{
	return date("Y-m-d h:ia");
}

function transfer_caption()
{
	return 'Funds Transfered to My Bank Account';
}

function show_date($date)
{
	return date('jS M Y / h:ia', strtotime($date));
}

function get_classic_price($level)
{
	$stage_amount = array('0','0','1000','3000','10000','30000','100000','250000','2000000');
	return $stage_amount[$level];
}

function get_premium_price($level)
{
	$stage_amount = array('0','0','5000','15000','50000','150000','500000','2500000','10000000');
	return $stage_amount[$level];
}

function get_earnings($level,$plan)
{
	if($plan == 'classic')
	{
		return get_classic_price($level);
	}
	else{
		return get_premium_price($level);
	}
	
}

function col_val($tab,$col,$val,$return)
{
	$query = "select * from $tab where $col='$val'";	
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	return  $row[$return];	
}

function count_refs($user)
{
	$query = "select * from profileupdate where ref_user = '$user'";	
	$result = mysql_query($query);
	$num = mysql_num_rows($result);
	return $num;
}

function count_downlines($user,$id)
{
	$query = "select * from profileupdate where id > $id";	
	$result = mysql_query($query);
	$num = mysql_num_rows($result);
	return $num;
}

function sum_amount($user,$type)
{
	$query = "select sum(amount) from payments where username = '$user' and transaction_type = '$type'";	
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	return $row['sum(amount)'];
}

function btn_active($bal)
{
	if($bal == 0)
	{
		echo 'disabled';
	}
}

function check_user($user)
{
	$query = "select * from profileupdate where username = '$user'";	
	$result = mysql_query($query);
	$num = mysql_num_rows($result);
	if($num > 0)
	{
		return 'yes';
	}
	else{
		return 'no';
	}
}

function check_reference($user)
{
	$query = "select * from profileupdate where username = '$user'";	
	$result = mysql_query($query);
	$num = mysql_num_rows($result);
	if($num > 0)
	{
		return 'yes';
	}
	else{
		return 'no';
	}
}

function count_reference($ref_user)
{
	$query = "select * from profileupdate where ref_user = '$ref_user'";	
	$result = mysql_query($query);
	$num = mysql_num_rows($result);
	if($num > 5)
	{
		return 'yes';
	}
	else{
		return 'no';
	}
}

function stage_name($level)
{
	if($level=='0')
	{
		return 'Pending Stage 1';
	}
	elseif($level=='1')
	{
		return 'Stage 1 (Distributor)';
	}
	elseif($level=='2')
	{
		return 'Stage 2 (Manager)';
	}
	elseif($level=='3')
	{
		return 'Stage 3 (Senior Manager)';
	}
	elseif($level=='4')
	{
		return 'Stage 4 (Director)';
	}
	elseif($level=='5')
	{
		return 'Stage 5 (Silver Director)';
	}
	elseif($level=='6')
	{
		return 'Stage 6 (Gold Director)';
	}
	else
	{
		return 'Stage 7 (Diamond Director)';
	}
}

function get_level($user)
{
	$query = "select * from profileupdate where username = '$user'";	
	$result = mysql_query($query);	
	$row = mysql_fetch_array($result);
	if($row['level'] == '0')
	{
		return 'Pending Stage 1';
	}
	elseif($row['level'] == '1')
	{
		return 'Distributor';
	}
	elseif($row['level'] == '2')
	{
		return 'Manager';
	}
	elseif($row['level'] == '3')
	{
		return 'Senior Manager';
	}
	elseif($row['level'] == '4')
	{
		return 'Director';
	}
	elseif($row['level'] == '5')
	{
		return 'Silver Director';
	}
	elseif($row['level'] == '6')
	{
		return 'Gold Director';
	}
	else
	{
		return 'Diamond Director';
	}
}

function make_payments($username, $description, $amount, $transaction_type)
{
	$query = "insert into payments set username = '$username', description = '$description', amount = '$amount', date_time = '".now()."', transaction_type = '$transaction_type'";	
	$result = mysql_query($query);	
}

function get_dp($user)
{
	$query = "select * from profileupdate where username = '$user' and imagename != ''";	
	$result = mysql_query($query);	
	$num = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	if($num > 0)
	{
		echo $row['imagename'];	
	}
	else
	{
		echo 'profile.png';	
	}
}

function get_extension($file)
{
	$break_name = explode('.',$file);
	$reverse_name= array_reverse($break_name);
	$extension = $reverse_name[0];
	return $extension;
}

function ref_plan($ref_user, $newuser_plan)
{
	$query = "select * from profileupdate where username = '$ref_user'";	
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row['plan'] != $newuser_plan)
	{
		return 'error';	
	}
}	



function get_geo_id()
{
	$query = "select * from profileupdate where plan='".$_SESSION['plan']."' order by id desc";	
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$geo_id = $row['geo_id']+1;
	return $geo_id;
}


function get_ref($geo_id)
{
	//Get the ref number of item.
	$query = "select * from profileupdate where plan='".$_SESSION['plan']."' order by id desc";	
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$ref =  $row['ref'];
	
	
	//validate and record reference if it's less than 5.	
	$query = "select * from profileupdate where ref = '$ref'";	
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$num = mysql_num_rows($result);
	
	if($num < DOWNLINE)
	{
		return $row['ref'];	
	}
	else
	{
		$ref = $row['ref']+1;
		return $ref; 	
	}
}

function set_ref_user($user)
{
	return $user; // Nothin has been defined yet.	
}

function get_downlines($ref)
{
	$query = "select * from profileupdate where ref='$ref'";	
	$result = mysql_query($query);
	$num = mysql_num_rows($result);
	for($i=0; $i<$num; $i++)
	{
		$row = mysql_fetch_array($result);
		echo '<p>Lu '.$row['geo_id'].'</p>';	
	}
}

function plan_price($type)
{
	if($type == 'classic')
	{
		return '1200';	
	}
	else{
		return '6000';
	}	
}	

function paystack_price($type)
{
	if($type == 'classic')
	{
		return '1225';	
	}
	else{
		return '6100';
	}
}




function first_ref_user($plan)
{
	
	//Get the ref number of item.
	$query = "select * from profileupdate where plan='$plan' order by id asc";
	$result = mysql_query($query);
	$num = mysql_num_rows($result);
	if($num > 0)
	{
		$row = mysql_fetch_array($result);
		return $row['username'];
	}
	else
	{
		return '.';	
	}
}

function short_date($date)
{
	return date('d-m-Y', strtotime($date));
}


function dear_user($email)
{
	$query = "select * from profileupdate where email = '$email'";	
	$result = mysql_query($query);	
	$num = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	if($num > 0)
	{
		return $row['firstname'].' '.$row['lastname'];	
	}
	else
	{
		return 'Subscriber';	
	}
	
}

function send_sms($message,$tel)
{

		$msg = str_replace(' ','+',$message);


		$url = "https://portal.sms2profit.com/sms-api/?email=fehmglobal@gmail.com&password=powerof5&sender=Powerof5&recipients=".$tel."&message=".$msg;
	
		$f = fopen($url, "r");
		return $answer = fgets($f, 255);

}


//Send Email Function
function send_mail($to, $name, $subject, $mail_heading, $content,$sender_email)
{
	
$mailcontent  = '<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
  <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
  <title>Single Column</title>
  
  <style type="text/css">
body {
  margin: 0;
  padding: 0;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
table {
  border-spacing: 0;
}
table td {
  border-collapse: collapse;
}
.ExternalClass {
  width: 100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
  line-height: 100%;
}
.ReadMsgBody {
  width: 100%;
  background-color: #ebebeb;
}
table {
  mso-table-lspace: 0pt;
  mso-table-rspace: 0pt;
}
img {
  -ms-interpolation-mode: bicubic;
}
.yshortcuts a {
  border-bottom: none !important;
}
@media screen and (max-width: 599px) {
  .force-row,
  .container {
    width: 100% !important;
    max-width: 100% !important;
  }
}
@media screen and (max-width: 400px) {
  .container-padding {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
}
.ios-footer a {
  color: #aaaaaa !important;
  text-decoration: underline;
}
</style>
</head>

<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- 100% background wrapper (grey background) -->
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
  <tr>
    <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">

      <br>

      <!-- 600px container (white background) -->
      <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
        <tr>
          <td class="container-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#DF4726;padding-left:24px;padding-right:24px">
            <a href="http://powerof5ng.com" title="Visit our website"><img src="'.company_logo().'"></a>
          </td>
        </tr>
        <tr>
          <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff">
            <br>

<div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550">'.$mail_heading.'</div>
<br>

<div class="body-text" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333; padding-bottom:100px">
  Dear '.$name.',<br><br><p>'.$content.'</p>
</div>

          </td>
        </tr>
        <tr>
          <td class="container-padding footer-text" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px">
            <br><br>
           	'.company_name().' &copy; '.date('Y').'. All rights reserved..
            <br><br>

            <strong>'.company_name().'</strong><br>
            <span class="ios-footer">
              '.$sender_email.'<br>
              '.company_phone().'<br>
            </span>
            <a href="http://'.domain_name().'" style="color:#aaaaaa">'.domain_name().'</a><br>

            <br><br>

          </td>
        </tr>
      </table>
<!--/600px container -->


    </td>
  </tr>
</table>
<!--/100% background wrapper-->
</body>
</html>';


$headers = "MIME-Version: 1.0" . "\n";
$headers .= "Content-type:text/html" . "\n";
$headers .= "From: $sender_email"."\r\n";
	 
mail($to,$subject, $mailcontent,$headers); 
/*$from = 'no_reply@workforceoutsource.com';
$fromName = 'Workforce Career Manager';	
sendElasticEmail($to, $subject, $mailcontent, $from, $fromName);
*/
return $mailcontent;
}
?>
<?php
		
		// set timezone
		ini_set('date.timezone', 'Africa/Lagos');
		//$now = date('Y-m-d H:i:s');
include('connect.php');



function expire_time()
{
	return date("Y-m-d H:i:s", strtotime("+48 hours", strtotime(now()))); 
}

function mydate($date)
{
	return date('Y-m-d',strtotime($date));	
}
function today()
{
	return date('Y-m-d');	
}

	if(array_key_exists('import', $_POST))	{

		
		$filename=$_FILES["file"]["tmp_name"];
		if($_FILES["file"]["size"] > 0)	{
			$file = fopen($filename, "r");
			while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)	{
				//print_r($emapData);
				$sql = "INSERT INTO activities (id, date, task, responsibility, unit, deadline, status) VALUES ('', '".today()."', '".$emapData[1]."', '".$emapData[2]."', '".$emapData[3]."', '".mydate($emapData[4])."', 'undone')";
				mysql_query($sql);
			}
			fclose($file);
			
			echo "Activity list has been successfully imported";
		}
		else	{
			echo "Invalid file! Please upload CSV File";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Import CSV/Excel File</title>
</head>
<body>
<form enctype="multipart/form-data" method="post">
<table border="1" width="40%" align="center">
<tr >
<td colspan="2" align="center"><strong>Import CSV/Excel file</strong></td>
</tr>

<tr>
<td align="center">CSV/Excel File:</td><td><input type="file" name="file" id="file"></td></tr>
<tr >
<td colspan="2" align="center"><input type="submit" name="import" value="Import"></td>
</tr>
</table>
</form>
</body>
</html>
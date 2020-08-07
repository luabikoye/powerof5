<?php

session_start();
include('session-admin.php');
include('admin/pages/connect.php');
require_once('admin/pages/fns.php');

  
		   $userfile = $_FILES['userfile']['tmp_name'];
		   $userfile_name = $_FILES['userfile']['name'];
		  //get cv extension for chk mating
		  
		  $extension = get_extension($userfile_name);
		  $filename = $_SESSION['loggedin'].'.'.$extension;
		  
		  
		  $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
		  $detectedType = exif_imagetype($_FILES['userfile']['tmp_name']);
          if(in_array($detectedType, $allowedTypes))
		  {
				
		   //move CV to appropriate folder
		   $upfile = 'profile_pics/'.$filename;
		   if(move_uploaded_file($userfile, $upfile));
		{
		
					
	  // Resize Thumbnail from Template Image
		    require_once('SimpleImage.php');
	 		$image = new SimpleImage();
   			$image->load($upfile);
  			$image->resizeToHeight(150);
   			$image->save($upfile);
			
			mysql_query("update profileupdate set imagename = '$filename' where username = '".$_SESSION['loggedin']."'");
	}
		   
		   
		  }
		  
		  header("Location: genealogy.php");
		  
		  
?>
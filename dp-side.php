 Welcome <?php echo col_val('profileupdate', 'username', $_SESSION['loggedin'], 'firstname'); ?> <?php echo col_val('profileupdate', 'username', $_SESSION['loggedin'], 'lastname'); ?>,<br><strong>(<?php echo get_level($_SESSION['loggedin']); ?>)</strong><br><br>
                 <img src="profile_pics/<?php get_dp($_SESSION['loggedin']); ?>" class="img-responsive img-cirle" style="height:150px;">
                 <a id="change_dp">Change Display Picture</a>
             <div id="passport">
             Upload Image
             	<form action="proc-upload.php" method="post" enctype="multipart/form-data">
                	<input type="file" class="form-control" name="userfile"><br>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
             </div> 
            <br><br> 
<strong>Download E-book</strong><br>
           <a href="ebook/a1.pdf"><img src="images/a1_maths.jpg" class="img-responsive img-rounded" style="height:150px;"></a>
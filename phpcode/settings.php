<?php include('sessionstart.php');?>
<!doctype html>
<html lang="en">
<?php include('header.php');?>
<body>

<div class="wrapper">
    <?php include('sidebar.php');?>

    <div class="main-panel">
        <?php include('navbar.php');?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
				<div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Settings</h4>
                            </div>
					
                            <div class="content">
<?php
							$qu = mysql_query("SELECT * FROM admin WHERE id='1'") or die (mysql_error());
$re = mysql_fetch_array($qu);
$p = $re['adminpassword']; 

$act=isset($_GET['pass'])?$_GET['pass']:"";
 
if($act=='up'){

//////
$copassword = mysql_real_escape_string($_POST['cpassword']);
$curpassword=md5($copassword);
$password = mysql_real_escape_string($_POST['npassword']);
$newpassword=md5($password);
$cpassword = mysql_real_escape_string($_POST['copassword']);
$confopassword=md5($cpassword);
///////
if ($p==$curpassword){
	if ($newpassword==$confopassword){
		$upp = mysql_query("UPDATE admin SET adminpassword='$newpassword' WHERE id='1'") or die (mysql_error());?>
<div class="infomsgbox">Password changed with success.</div>          
<?php	}else{?>
<div class="errormsgbox">Your new and old password don't seem to match. Please try again.</div>
<?php }	
}else{?>
<div class="errormsgbox">Recent password seems wrong. Please try again.</div>
<?php }
	
}
///////////
$act=isset($_GET['user'])?$_GET['user']:"";
 
if($act=='up'){

$adminname = mysql_real_escape_string($_POST['auser']);
	
	$uaa = mysql_query("UPDATE admin SET adminuser='$adminname' WHERE id='1'") or die (mysql_error());?>
	
<?php }
$q = mysql_query("SELECT * FROM admin WHERE id='1'") or die (mysql_error());
$r = mysql_fetch_array($q);
?>
                                <form action="settings.php?user=up" method="post" >

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Change username</label>
                                                <input type="text" tabindex="1" class="form-control border-input" placeholder="username" name="auser" id="auser" value="<?php echo $r['adminuser'];?>">
                                            </div>
											<div class="text-center">
										<button type="submit" tabindex="5" name="submit" class="btn btn-info btn-fill btn-wd" id="submit" value="Update Username" />Update username</button>
										</form>
                                    </div>
									</div>
									</div>
										
                                        
										<div class="row">
                                        <div class="col-md-6">
										<form action="settings.php?pass=up" method="post" >
                                            <div class="form-group">
                                                <label>Recent password</label>
                                                <input type="password" tabindex="2" class="form-control border-input" placeholder="" name="cpassword" id="cpassword" value="">
                                            </div>
											<div class="form-group">
                                                <label>New password</label>
                                                <input type="password" tabindex="3" class="form-control border-input" placeholder="" name="npassword" id="npassword" value="">
                                            </div>
											<div class="form-group">
                                                <label>Repeat new password</label>
                                                <input type="password" tabindex="4" class="form-control border-input" placeholder="" name="copassword" id="copassword" value="">
                                            </div>
                                        </div>
										
										
									</div>
									<div class="text-center">
										<button type="submit" tabindex="5" name="submit" class="btn btn-info btn-fill btn-wd" id="submit" value="Update Password" />Update password</button>
										</form>
                                    </div>
                                    </div>

                                    

               
                                    
                                    <div class="clearfix"></div>
                                </form>
				
                            </div>
                        </div>
                    </div>	
					
					
					
                </div>
                
                    
                    
                    
                
            </div>
        </div>

<?php include('footer.php');?>

    </div>
</div>


</body>

<?php include('javascript-include.php');?>
	



</html>

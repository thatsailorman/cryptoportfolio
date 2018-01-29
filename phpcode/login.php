<?
session_start();
ob_start();
?>
<?php include('php/db.php');?>
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
                                <h4 class="title">User Log in</h4>
                            </div>
					
                            <div class="content">
							<?php
$err=isset($_GET['error'])?$_GET['error']:""; 
if($err=='error'){?>
<div class="errormsgbox">Username and password don't match.</div>	
<?php }

if(!isset($_SESSION['adminuser'])){
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$adminuser=mysql_real_escape_string($_POST['adminuser']); 
$adminpassword=mysql_real_escape_string($_POST['adminpassword']); 
$gpassword=md5($adminpassword); // Encrypted Password
$sql="SELECT id FROM admin WHERE adminuser='$adminuser' and adminpassword='$gpassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1)
{
	
$_SESSION["adminuser"] = $adminuser;

header("location:dashboard.html");
}
else
{
header("location:login.php?error=error");

}
}
ob_end_flush();

?>
                                <form action="login.php" method="post" >

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control border-input" placeholder="username" name="adminuser" id="adminuser">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control border-input" placeholder="password" name="adminpassword" id="adminpassword">
                                            </div>
                                        </div>
                                    </div>

                                    

               
                                    <div class="text-center">
										<button type="submit" name="submit" class="btn btn-info btn-fill btn-wd" id="submit" value="submit" />Log in</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
				
                            </div>
                        </div>
                    </div>	
					
					
					
                </div>
                
                    
                    
                    
                
            </div>
        </div>
<?php }else{
header("location:dashboard.html");
}
?>
<?php include('footer.php');?>

    </div>
</div>


</body>

<?php include('javascript-include.php');?>
	



</html>

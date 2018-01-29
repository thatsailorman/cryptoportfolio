<?php include('sessionstart.php');?>
<?php include ('php/db.php');

$id = strip_tags($_GET['id']);

$SQL = mysql_query("SELECT * FROM coins WHERE id='$id'") or die (mysql_error());
$row = mysql_fetch_array($SQL);

?>
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
<b>Are you sure you want to delete <?php echo $row['coinfull'];?>?</b>
<br>
<br>
<?php
         if(isset($_POST['trashbin'])) {
            mysql_query("UPDATE coins SET trashbin=1 WHERE id='$id'");
			echo ("Added to trash bin. <script>setTimeout(function(){ window.location.replace('dashboard.html') }, 3000); </script>");
         }
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <button type="submit" class="btn btn-info btn-fill btn-wd" name="trashbin" id="trashbin">Delete to trash</button>
				 
</div>
                
                    
                    
                    
                
           </div></div>


<?php include('footer.php');?>

    </div>
</div>


</body>

<?php include('javascript-include.php');?>
	



</html>				 
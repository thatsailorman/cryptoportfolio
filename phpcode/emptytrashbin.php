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

<div class="clear"></div>
<?php
//delete from database
$delete=mysql_query("DELETE FROM coins WHERE trashbin='1'") or die(mysql_error());
echo "<b>Trash bin is now empty.</b> <script>setTimeout(function(){ window.location.replace('dashboard.html') }, 5000); </script>";
?>  
</div>
                
                    
                    
                    
                
            </div>
        


<?php include('footer.php');?>

    </div>
</div>

</body>

<?php include('javascript-include.php');?>
	
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-trash',
            	message: "All deleted database entries have been removed with success. Trash bin is now empty."

            },{
                type: 'success',
                timer: 3000
            });

    	});
	</script>


</html>				 
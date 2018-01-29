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
                                <h4 class="title">Add crypto currency</h4>
                            </div>
					
                            <div class="content">
                                <form action="coinsubmitter.php" id="CoinSubmit" enctype="multipart/form-data" method="post" >
								
                                    <div class="row">
                                        <div class="col-md-5">
										
                                            <div class="form-group">
                                                <label>Currency, full name</label>
                                                <input type="text" class="form-control border-input" placeholder="Litecoin" name="coinfull" id="coinfull">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Short name (BTC etc)</label>
                                                <input type="text" class="form-control border-input" placeholder="LTC" name="coin" id="coin">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Date of investment</label>
                                                <input type="text" class="form-control border-input" placeholder="30-10-2017" name="date" id="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="text" class="form-control border-input" placeholder="1.50" name="amount" id="amount">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Value of coin during investment</label>
                                                <input type="text" class="form-control border-input" placeholder="51" name="valuebuy" id="valuebuy">
                                            </div>
                                        </div>
                                    </div>

                                    

               
                                    <div class="text-center">
										<button type="submit" name="CoinSubmit" class="btn btn-info btn-fill btn-wd" id="uploadButton" value="Upload" />Toevoegen</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
														<script>
$(document).ready(function()
{
    $('#CoinSubmit').on('submit', function(e)
    {
        e.preventDefault();
        $('#uploadButton').attr('disabled', ''); // disable upload button
        //show uploading message
        $("#loading").php('');
        $(this).ajaxSubmit({
        target: '#output',
        success:  afterSuccess //call function after success
        });
    });
});
 
function afterSuccess()
{
    $('#CoinSubmit').resetForm();  // reset form
    $('#uploadButton').removeAttr('disabled'); //enable submit button
    $('#loading').php('');
}
</script>
				<div id="loading"></div>
<div id="output"></div>
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

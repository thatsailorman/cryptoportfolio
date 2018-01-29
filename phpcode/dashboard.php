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
                <?php include('toprow.php');?>
				
				<!-- START new row cryptovaluta-->
                <div class="row">
				<h4><i class="ti-bar-chart"></i> Crypto Statistics<br><br></h4>
				
				<!-- START database loop-->
				<?php
	$query=mysql_query("select * from coins order by id desc");

	$numr=mysql_num_rows($query);
	if ($numr==0)
	{
	echo '<div class="msg">No coins have been added to database yet.</div>';
	}
	while($row=mysql_fetch_assoc($query)){
$CoinFullName = $row['coinfull'];
$CoinName = $row['coin'];
$CoinAmount = $row['amount'];
$CoinLink = preg_replace("![^a-z0-9]+!i", "-", $postName);
$CoinLink = strtolower($postLink);
$jsonGET = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=".$CoinName."&tsyms=EUR,USD,BTC");
											$objGET= json_decode($jsonGET);
											$newvalue = $objGET->$fiat;
											$newvalueBTC = $objGET->BTC;
											$TotalValueWorth += $newvalue;
$CoinProfit = ($newvalue * $CoinAmount) - ($row['valuebuy'] * $CoinAmount);
$TotalValueCoin = $newvalue * $CoinAmount;
$TotalValueCoinBTC = $newvalueBTC * $CoinAmount;
$CoinProfitTotal += $CoinProfit;
$calc1 = $newvalue - $row['valuebuy'];
$calc2 = $calc1 / $row['valuebuy'];
$calc3 = $calc2 * 100; 

?>
				
				<!--- Start single crypto --->
				<div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-primary text-center">
                                            <div class='fontscale'><i class="cc <?php echo $row['coin'];?>" title="<?php echo $row['coin'];?>"></i></div><p><b><?php echo $row['amount'];?></b></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><?php echo $row['coinfull'];?> (<?php echo $row['coin'];?>)<br>
											
											<b><?php echo $fiatsymbol;?><?php 
											echo $newvalue;
											?></b> <i class="ti-split-v-alt"></i> <?php echo $fiatsymbol;?><?php echo $row['valuebuy'];?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
										<p>
										<i class="ti-stats-up"></i> <b><?php echo number_format($calc3, 0);?>%</b> Since <?php echo $row['date'];?>
                                        <i class="ti-bar-chart"></i>Profit: <b><?php echo $fiatsymbol;?><?php echo $CoinProfit;?></b>
										<br><br>
										Worth <b><i class="cc <?php echo $row['coin'];?>" title="<?php echo $row['coin'];?>"></i> <?php echo $fiatsymbol;?><?php echo number_format($TotalValueCoin,2);?></b><br>
										Value in <b> <i class="cc BTC"></b></i>(BTC) <b><?php echo number_format($TotalValueCoinBTC,5);?></b>
										
										<p style="text-align:right"><a href="id_delete.php?id=<?php echo $row['id'];?>" title="Delete"><img src="images/db_delete.png" width="15px" height="15px"></a></p>
										</p>
                                    </div>
                                </div>
                            </div>
								<!--- UNCOMMENT TO ADD CHARTS GRAPHICS	<div class="flexsize">
										<script type="text/javascript">
baseUrl = "https://widgets.cryptocompare.com/";
var scripts = document.getElementsByTagName("script");
var embedder = scripts[ scripts.length - 1 ];
var cccTheme = {"General":{"background":"transparent","borderWidth":"0px","borderColor":"transparent","borderRadius":"2px"},"Header":{"background":"transparent","color":"#444"},"Followers":{"background":"transparent","color":"transparent","borderColor":"transparent","counterBorderColor":"transparent"},"Data":{"priceColor":"#999","infoLabelColor":"transparent","infoValueColor":"transparent"},"Chart":{"animation":true},"Conversion":{"lineHeight":"40px","color":"#999"}};
(function (){
var appName = encodeURIComponent(window.location.hostname);
if(appName==""){appName="local";}
var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
var theUrl = baseUrl+'serve/v2/coin/chart?fsym=<?php // echo $CoinName;?>&tsym=EUR&period=1M';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>
										</div> --->
                        </div>
                    </div>
					<?php } ?>
					<!--- End single crypto --->
					<!--- End database loop --->
					
					
					
					
                </div>
                
                    
                    
                    
                
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
            	icon: 'ti-gift',
            	message: "Welcome back to yout <b>Crypto Portfolio Dashboard</b>. You like our script? Feel free to make a small donation so we can keep working in our project. :)"

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>

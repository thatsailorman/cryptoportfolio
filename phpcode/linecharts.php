<div class="flexsize">
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
var theUrl = baseUrl+'serve/v2/coin/chart?fsym=<?php echo $CoinName;?>&tsym=EUR&period=1M';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>
										</div>
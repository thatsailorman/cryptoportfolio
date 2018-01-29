<?php
$fiat = 'USD'; // Other options: USD

if ( $fiat == "EUR" ) {
	$fiatsymbol = '€';
}
if ( $fiat == "USD" ) {
	$fiatsymbol = '$';
}
if ( $fiat == "" ) {
$fiat = "EUR";
$fiatsymbol = '€';
}
?>
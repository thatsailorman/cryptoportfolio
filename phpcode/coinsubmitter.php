<?php
include('php/db.php');


if($_POST)
{	
	if(!isset($_POST['coinfull']) || strlen($_POST['coinfull'])<1)
	{
		//required variables are empty
		die("Please enter a full name for the currency. Example: <b>Bitcoin</b>.");
	}
	
	if(!isset($_POST['coin']) || strlen($_POST['coin'])<1)
	{
		//required variables are empty
		die("Please add the shortcode for the crypto coin. Example: <b>BTC</b>.");
	}
	if(!isset($_POST['coin']) || strlen($_POST['coin'])>6)
	{
		//required variables are empty
		die("Your coin shortcode seems to long... Example: <b>BTC</b>.");
	}
	
		if(!isset($_POST['date']) || strlen($_POST['date'])<1)
	{
		//required variables are empty
		die("Please enter date of investment. Example: <b>30-10-2017</b>.");
	}
	if(!isset($_POST['date']) || strlen($_POST['date'])>10)
	{
		//required variables are empty
		die("Your date doesn't seem to be correct. Example: <b>30-10-2017</b>.");
	}
	
			if(!isset($_POST['amount']) || strlen($_POST['amount'])<1)
	{
		//required variables are empty
		die("Please enter coin amount. Example: <b>10.42</b>.");
	}
	
				if(!isset($_POST['valuebuy']) || strlen($_POST['valuebuy'])<1)
	{
		//required variables are empty
		die("Please enter the value of the coin during the date of your investemtn. Example: <b>51</b>.");
	}
	
	$Coinfullcheck 	= preg_replace("/[^a-zA-Z0-9-]/"," ",$_POST['coinfull']);
	$Coinfull 		= strip_tags($Coinfullcheck);
	$Coinfull 		= htmlspecialchars($Coinfull); 
	$Coinfull       = mysql_real_escape_string($Coinfull);//Coin full name
	$Coinfull 		= ucfirst($Coinfull); 
	$Coincheck 		= preg_replace("/[^a-zA-Z0-9-]/"," ",$_POST['coin']);
	$Coin 			= strip_tags($Coincheck);
	$Coin 			= htmlspecialchars($Coin); 
	$Coin      		= mysql_real_escape_string($Coin);//Coin name
	$Coin 			= strtoupper($Coin);
	$Datecheck 		= preg_replace("/[^a-zA-Z0-9-]/"," ",$_POST['date']);
	$Date 			= strip_tags($Datecheck);
	$Date 			= htmlspecialchars($Date); 
	$Date      		= mysql_real_escape_string($Date);//Date
	$Amountcheck	= mysql_real_escape_string($_POST['amount']);
	$Amount 		= strip_tags($Amountcheck);
	$Amount 		= htmlspecialchars($Amount); 
	$Amount			= str_replace(',','.',$Amount);
	$Valuebuycheck	= mysql_real_escape_string($_POST['valuebuy']);
	$Valuebuy 		= strip_tags($Valuebuycheck);
	$Valuebuy 		= htmlspecialchars($Valuebuy); 
	$Valuebuy		= str_replace(',','.',$Valuebuy);


   
// Insert info into database table.. do w.e!
		mysql_query("INSERT INTO coins (coin, coinfull, date, amount, valuebuy, trashbin) VALUES ('$Coin', '$Coinfull', '$Date', '$Amount', '$Valuebuy', '0')");
		
		die("Succes! Adding coin... <script>setTimeout(function(){ window.location.replace('dashboard.html') }, 3000); </script>");
		
   }else{
   		die('Oops something has gone wrong. Please try again.');
   }
?>
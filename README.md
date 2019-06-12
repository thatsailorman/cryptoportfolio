## Crypto Portfolio CMS

Warning: changes have been made to the CryptoCompare API, one must now sign up for a API key (it used to be fully open), so this script currently doesn't fetch the coin values. In other words: This code needs some changes in order to make the new CryptoCompare API work.

An open-source Crypto Portfolio php script. Calculate your investment profits in percentage and EUR or USD. All your quick stats on one page. All made possible thanks to the CryptoCompare API!

![Preview](http://cointools.nl/cryptoportfolio-preview.jpg)

- Automatically show currency ICON.
- Add and delete new crypto-currencies directly to your self-hosted Crypto Portfolio from the front-end of the CMS.
- Calculates profit or loss in percentage and currency of choice (USD $ or EUR €)

## LIVE DEMO?
For a LIVE DEMO, visit: http://cointools.nl/portfoliodemoGITHUB/

Log in with username: **demo**
Password: **password**



### Screenshots:
![Screenshot](http://cointools.nl/uploads/screenshot1-cryptoportfolio.JPG)

Uncomment a line to show charts on your dashboard:
![Screenshot](http://cointools.nl/uploads/grafiek.JPG)

Feel free to help out by adding new functions, codes, charts etc. to the Crypto Portfolio CMS code.

Happy trading!

### How to start?
For a Dutch documentation, click here: https://cryptobelasting.ams3.digitaloceanspaces.com/CryptoPortfolioCMS-documentatie.pdf

**Step one:** Download all script files from this github page.
This version is in English language. For the Dutch version, download link here: http://cointools.nl/download_cryptoportfolio.php

**Step two:** Upload all files to your webhosting account.

**Step three:** Create a new database and import the SQL file to your newly created database (for example with PhpMyAdmin).

**Step four:** Go to folder 'php', and edit db.php with your database information (database name, username, password etc).
In the same folder (php) open config.php, and change fiat to USD or EUR.

**Step five:** Create a file called: .htaccess (yes, including the dot at the beginning .htaccess) and add the following two lines to the .htaccess file:

RewriteEngine on

RewriteRule ^(.*)\.html$ $1.php [L]

**All done!**

That's it! Visit your url in your browser and log in by using **demo** as username, and **password** as password.
IMPORTANT to change your username and password directly after your first login!


CryptoCompare API: https://www.cryptocompare.com/api/
Layout by CreativeTim: https://www.creative-tim.com/product/paper-dashboard

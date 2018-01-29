<?php
mysql_connect("localhost","USERNAME","PASSWORD") or die(mysql_error());
//hostname - normaly localhost
//dbusername - your mysql username
//dbpassword - your mysql password
mysql_select_db("DATABASENAME") or die(mysql_error());
//dbname - your mysql database name
?>
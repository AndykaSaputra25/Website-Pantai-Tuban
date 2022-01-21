<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="pantai";

mysql_connect($servername,$username,$password) or die("Gagal");
mysql_select_db($db) or die ("Db gagal");
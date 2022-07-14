<?php
  //PHP MySQLi OOP
  //Referensi : https://www.w3schools.com/php/func_mysqli_connect.asp
  
  //menyiapkan akun database
  $hostname = "localhost";
  $username = "";
  $passwd   = "";
  $dbname   = "nomads";

  //membuat object baru $myConn, konek ke mySQL server
  $myConn = new mysqli($hostname,$username,$passwd,$dbname);
  
  
  // Check connection
  if ($myConn -> connect_errno) {
  		echo "Kode Error : ".$myConn -> connect_errno;
  		echo "<br/>";
  		echo "Failed to connect to MySQL: " . $myConn -> connect_error;
  		die("Exit");
	}

?>
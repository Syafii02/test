<?php
  // mengakses fle login.php
  include("login.php");
  
  //mengakses table explo2
  $sqlBaca = "SELECT * FROM travel_packages";
  
  //menjalankan query, method query()
  //hasil disimpan pada onject $result
  $result = $myConn->query($sqlBaca);

  //menjalankan query, method query()
  //hasil disimpan pada onject $result
  $result = $myConn->query($sqlBaca);

  //cetak judul table
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td>ID</td>";
  echo "<td>Judul</td>";
  echo "</tr>";
  

  /* mengambil data dari object $result, per baris record
     disimpan dalam object, menggunakan method fetch_object() */

  while($row = $result->fetch_object()){
	echo "<tr>";
	echo "<td>".$row->id."</td>";
	echo "<td>".$row->judul_buku."</td>"; 
  	echo "</tr>";
  }
    
  echo "</table>";
      
  //menutup koneksi dari MySQL server
  $myConn->close();
?>
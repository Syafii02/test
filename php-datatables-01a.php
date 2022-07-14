<!DOCTYPE html>
<!--  https://belajarphp.net/tutorial-datatables-php-dan-mysql/ -->
<html>
	<head>
		<meta charset="utf-8">
    	<title>Tutorial PHP Datatables Dengan PHP Dan MySQL</title>
    	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>		
	</head>
	<body>
		<table id="tabel-data">
    	<thead>
        	<tr>
            	<th>ID</th>
            	<th>Judul Buku</th>
        	</tr>
    	</thead>
    	<tbody>
    	<?php
        	include("login.php");
        	
        	//mengakses table explo2
  			$sqlBaca = "SELECT * FROM travel_packages";
  			
  			//menjalankan query, method query()
  			//hasil disimpan pada onject $result
  			$result = $myConn->query($sqlBaca);
  
        	while($row = $result->fetch_object()) {
              echo "<tr>";
              echo "<td>".$row->id."</td>";
              echo "<td>".$row->title."</td>";
        	  echo "</tr>";
        	}

    		?>
    	</tbody>

    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

</table>
	</body>
</html>
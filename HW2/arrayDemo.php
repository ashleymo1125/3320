<!DOCTYPE html>
<!--	Author: Mike OKane
		Date:	August 15, 2007
		File:	arrays1.php
		Purpose:PHP Practice
-->
<html>
<head>
	<title>Scores Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Scores report </h1>

	<?php
		$rows   = $_POST['rows'];
		$columns = $_POST['columns'];
		$min   = $_POST['min'];
		$max   = $_POST['max'];
		
    $d = array( array());
    
  

	

		print ("Your array size is: $rows x $columns <br>");
		print ("Your min value is: $min <br>");
		print ("Your max value is: $max <br>");
		
      for($i = 0; $i < $rows; $i++)
    {
        
        for($j = 0; $j < $columns; $j++)
        {
           echo $d[$i][$j] = rand($min,$max); 
         
            
        }
          echo "<br>";
    }
    
   

    

	
	?>
</body>
</html>

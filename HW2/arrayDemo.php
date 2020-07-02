<!DOCTYPE html>

<!--	Used course sample code array1.php as reference code -->
<html>
<head>
	<title>Scores Report</title>
	<link rel ="stylesheet" type="text/css" href="arrayDemo.css">
</head>
<body>
	<h1>Scores report </h1>
	<!--- first table ---->
<table>
	<?php
		$rows   = $_POST['rows'];
		$columns = $_POST['columns'];
		$min   = $_POST['min'];
		$max   = $_POST['max'];
 /* below is initilizing the 2d array. */
    $d = array( array());
    
  

	

		print ("Your array size is: $rows x $columns <br>");
		print ("Your min value is: $min <br>");
		print ("Your max value is: $max <br>");
	/* here is the nested for loop that stores the random number into a 2d array */	
      for($i = 0; $i < $rows; $i++)
    {
        echo "<tr> </tr>";
        for($j = 0; $j < $columns; $j++)
        {
           $d[$i][$j] = number_format(rand($min,$max), 3); 
           $element = $d[$i][$j];
           echo "<td> $element </td> ";
            
            
        }
          
    }
   
    
   

    

	
	?>
	</table>
	<!--- Second table ---->
	<table>
    <tr>
	    <th> Row </th>
	    <th> Sum </th>
	    <th> Average</th>
	    <th> Standard Deviation</th>
        </tr>
        <!-- iteration for rows -->
	    <?php
        for($i = 0; $i < $rows; $i++)
        {
             $sum = 0;
            $FD = 0;
            $FD2 = 0;
            $FD3 = 0;
            /* iteration for rows */
            echo "<tr> </tr>";
            echo "<td> $i </td>";
            for($j = 0; $j < $columns; $j++)
            {
                /*  does calculations for table */
                $number = $d[$i][$j];
                $sum = $sum + number_format($number, 3);
                $average = $sum / $columns;
              /*  $FD = $number - $average;
                $FD2 = pow($FD,2);
                $FD3 = $FD3 + $FD2;
                $Mos = (1 / $columns) * $FD3;
                $SD = sqrt($Mos);*/
                    
                /*SD equation looks scary so i will do later */
                
                
           }
            
            $theNum = 0;
            $newNum = 0;
            $powPow = 0;
            $sumOfTheNum = 0;
            $Mos = 0;
            for($j = 0; $j < $columns; $j++)
            {
                
                $theNum = $d[$i][$j];
                
                $newNum = $theNum - $average;
                
                $powPow = pow($newNum, 2);
                
                $sumOfTheNum = $sumOfTheNum + $powPow;
                
              
            }
            $Mos = ( 1 / $columns) * $sumOfTheNum;
            
            $SD = sqrt($Mos);
           
            /* displays the calculations */
                
            echo "<td> ".number_format($sum,3)." </td>";
            echo "<td> ".number_format($average,3)." </td>";
            echo "<td> ".number_format($SD,3)." </td>";
            // resets calculations for next row
           
            $average = 0;
            $SD = 0;
           
           
            
        }
        
        ?>
        
    </table>
       <h1>  </h1>
        <!-- positive or negavtive table -->
        <table>
            <?php
            for($i = 0; $i < $rows; $i++)
            {
            
              
            
                
                for($j = 0; $j < $columns; $j++)
                {
                    $value = $d[$i][$j];
                    echo "<td> $value </td>";
                    
                }
                
                echo "<tr> </tr>";
                for($z = 0; $z < $columns; $z++)
                    {
                        $number = $d[$i][$z];
                        if($number > 0)
                        {
                            echo "<td> Positive </td>";
                                
                        }
                        if($number < 0)
                        {
                            echo "<td> Negative </td>";
                        }
                        if($number == 0)
                        {
                            echo "<td> Zero </td>";
                        }
                       
                    }
                echo "<tr> </tr>";
                
            }
            
                ?>
        </table>
	    
    <a href="arrayDemo.html";> Click here to return </a>
</body>
</html>

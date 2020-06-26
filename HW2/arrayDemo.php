<!DOCTYPE html>
<!--	Used course sample code array1.php as reference code -->
<html>
<head>
	<title>Scores Report</title>
	<link rel ="stylesheet" type="text/css" href="arrayDemo.css">
</head>
<body>
	<h1>Scores report </h1>
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
           $d[$i][$j] = rand($min,$max); 
           $element = $d[$i][$j];
           echo "<td> $element </td> ";
            
            
        }
          
    }
   
    
   

    

	
	?>
	</table>
	
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
            
            /* iteration for rows */
            echo "<tr> </tr>";
            echo "<td> $i </td>";
            for($j = 0; $j < $columns; $j++)
            {
                /*  does calculations for table */
                $number = $d[$i][$j];
                $sum = $sum + $number;
                $average = $sum / $columns;
                /*SD equation looks scary so i will do later */
                $SD = 5;
                
               
                 
                
            }
            /* displays the calculations */
                echo "<td> $sum </td>";
                echo "<td> $average </td>";
                echo "<td> $SD </td>";
            // resets calculations for next row
            $sum = 0;
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

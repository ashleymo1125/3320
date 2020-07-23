<?php

$db = mysqli_connect('localhost','root','');
mysqli_select_db($db ,'sakila');

$query = "select customer.first_name, customer.last_name, address.address, city.city, address.district, address.postal_code, GROUP_CONCAT(DISTINCT film.title SEPARATOR ', ')
from customer
inner join 
address, city, film, rental, inventory where (customer.customer_id = rental.customer_id
and customer.address_id = address.address_id 
and address.city_id = city.city_id 
and rental.inventory_id = inventory.inventory_id 
and inventory.film_id = film.film_id )
group by customer.customer_id
order by customer.last_name;";
$results = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <input type=button onClick="parent.location='manager.html'" value='Go to Manager page'>
</head>
<body>
<link rel="stylesheet" href="style.css" type="text/css">
<table>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>City</th>
    <th>District</th>
    <th>Postal_Code</th>
    <th>List of Films</th>
    </tr>
    
  <?php  
    
    $films = array();
    
    while($rows = mysqli_fetch_assoc($results))
    {
        echo "<tr>";
        echo "<td>".$rows['first_name']."</td>";
        echo "<td>".$rows['last_name']."</td>";
        echo "<td>".$rows['address']."</td>";
        echo "<td>".$rows['city']."</td>";
        echo "<td>".$rows['district']."</td>";
        echo "<td>".$rows['postal_code']."</td>";
        echo "<td>".$rows["GROUP_CONCAT(DISTINCT film.title SEPARATOR ', ')"]."</td>";
        
        
       
        echo "</tr>";
       
    }      
    ?>
   
        
    
    
    
    
    </table>
  </body>

</html>

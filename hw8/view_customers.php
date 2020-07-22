<?php

$db = mysqli_connect('localhost','root','');
mysqli_select_db($db ,'sakila');

$query = "select customer.first_name, customer.last_name, address.address, city.city, address.district, address.postal_code, film.title 
from customer
inner join 
address, city, film, rental, inventory where (customer.customer_id = rental.customer_id
and customer.address_id = address.address_id 
and rental.inventory_id = inventory.inventory_id 
and inventory.film_id = film.film_id );";
$results = mysqli_query($db, $query);

echo print_r($results);
?>

<!DOCTYPE html>
<html>
<table>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>City</th>
    <th>District</th>
    <th>Postal_Code</th>
   <!-- <th>List of Films</th> -->
    </tr>
    
  <?php  
    while($rows = mysqli_fetch_assoc($results))
    {
        echo "<tr>";
        echo "<td>".$rows['first_name']."</td>";
        echo "<td>".$rows['last_name']."</td>";
        echo "<td>".$rows['address']."</td>";
        echo "<td>".$rows['city']."</td>";
        echo "<td>".$rows['district']."</td>";
        echo "<td>".$rows['postal_code']."</td>";
        echo "</tr>";
    }      
    ?>
   
        
    
    
    
    
    </table>

</html>
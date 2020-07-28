<?php

error_reporting(error_reporting() & ~E_NOTICE);
error_reporting(E_ERROR | E_PARSE);
// removing warning and notice messages. This is from stack overflow

 $db = mysqli_connect('localhost','root','');
    mysqli_select_db($db ,'sakila');


		$title   = mysqli_real_escape_string($db, $_POST['title'] );
		$description = mysqli_real_escape_string($db,$_POST['description']);
		$releaseYear   = mysqli_real_escape_string($db, $_POST['releaseYear']);
		$languageId  = mysqli_real_escape_string($db, $_POST['languageId']);
        $rentalDuration  = mysqli_real_escape_string($db, $_POST['rentalDuration']);
        $rentalRate  = mysqli_real_escape_string($db, $_POST['rentalRate']);
        $length  = mysqli_real_escape_string($db, $_POST['length']);
        $replacementCost  = mysqli_real_escape_string($db,$_POST['replacementCost']);
        $rating  = mysqli_real_escape_string($db,$_POST['rating']);
        $specialFeatures  = mysqli_real_escape_string($db,$_POST['specialFeatures']);



$sql = "INSERT INTO sakila.film (title,description,release_year,language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features) VALUES (?,?,?,?,?,?,?,?,?,?);";

$stmt = mysqli_stmt_init($db);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "sql error";
    echo "<a href = \" manager.html\"> Click Here to return to Manager's page </a>";
}else
{
    echo "sql injection successful";
    echo "<a href = \" manager.html\"> Click Here to return to Manager's page </a>";
    mysqli_stmt_bind_param($stmt, "ssiiididss", $title, $description, $releaseYear, $languageId, $rentalDuration, $rentalRate, $length, $replacementCost, $rating, $specialFeatures);
    mysqli_execute($stmt);
}

// https://www.youtube.com/watch?v=I4JYwRIjX6c
// prepared statement inspired by video above


if($db->connect_error) {
  
    exit('Error connecting to database'); 
    // from website Schwab provided 
}

    

    

?>

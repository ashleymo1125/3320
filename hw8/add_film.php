<?php

error_reporting(error_reporting() & ~E_NOTICE);
error_reporting(E_ERROR | E_PARSE);
// removing warning and notice messages. This is from stack overflow

		$title   = $_POST['title'];
		$description = $_POST['description'];
		$releaseYear   = $_POST['releaseYear'];
		$languageId  = $_POST['languageId'];
        $rentalDuration  = $_POST['rentalDuration'];
        $rentalRate  = $_POST['rentalRate'];
        $length  = $_POST['length'];
        $replacementCost  = $_POST['replacementCost'];
        $rating  = $_POST['rating'];
        $specialFeatures  = $_POST['specialFeatures'];


    $db = mysqli_connect('localhost','root','');
    mysqli_select_db($db ,'sakila');

        $title2   = "'".$title."'";
		$description2 = "'".$description."'";
		$releaseYear2   = "'".$releaseYear."'";
		$languageId2  = "'".$languageId."'";
        $rentalDuration2 = "'".$rentalDuration."'";
        $rentalRate2  = "'".$rentalRate."'";
        $length2  = "'".$length."'";
        $replacementCost2  = "'".$replacementCost."'";
        $rating2  = "'".$rating."'";
        $specialFeatures2  = "'".$specialFeatures."'";

$query = "INSERT INTO sakila.film (title,description,release_year,language_id,rental_duration,rental_rate,length,replacement_cost,rating,special_features) VALUES ($title2,$description2,$releaseYear2,$languageId2,$rentalDuration2,$rentalRate2,$length2,$replacementCost2,$rating2,$specialFeatures2);";






$results = mysqli_query($db, $query) or die(mysqli_error($db));

if($results)
{
    echo "query succesful!";
    echo "<a href = \" manager.html\">";
}else
{
    echo "not successful";
    echo "<a href=\" manager.html\">Link</a>";
}
    

?>

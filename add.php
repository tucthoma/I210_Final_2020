<html lang="en">
<head>
    <title>Add Data</title>
</head>
<body>
<?php
//including the database connection file
include_once("includes/config.php");
//if we accept submitting
if(isset($_POST['Submit'])) {
    //if we accept the parameters
    $album = $_POST['album'];
    $artist = $_POST['artist'];
    $production_date = $_POST['production_date'];
    $label = $_POST['label'];
    $number_of_discs = $_POST['number_of_discs'];
    $price = $_POST['price'];
    $genre_id = $_POST['genre_id'];
    $description = $_POST['description'];



    // checking empty fields
    //if the fields are not empty
    if(empty($album) || empty($artist) || empty($production_date) || empty($label) || empty($number_of_discs) || empty($price) || empty($genre_id) || empty($description)) {
        if(empty($album)) {
            echo "<font color='red'>Album field is empty.</font><br/>";
        }
        if(empty($artist)) {
            echo "<font color='red'>Artist field is empty.</font><br/>";
        } if(empty($production_date)) {
            echo "<font color='red'>Production Date field is empty.</font><br/>";
        } if(empty($label)) {
            echo "<font color='red'>Label field is empty.</font><br/>";
        } if(empty($number_of_discs)) {
            echo "<font color='red'>Number of Discs field is empty.</font><br/>";
        } if(empty($price)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        } if(empty($genre_id)) {
            echo "<font color='red'>Genre ID field is empty.</font><br/>";
        }if(empty($description)) {
            echo "<font color='red'>Description field is empty.</font><br/>";
        }
     //otherwise
    } else {
        // if all the fields are filled (not empty)
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO recordstore_db.records (album, artist, production_date, label, number_of_discs, price, genre_id,description) VALUES('$album','$artist','$production_date','$label','$number_of_discs','$price','$genre_id','$description')");

        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>
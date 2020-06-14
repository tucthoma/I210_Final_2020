<?php
/**  * Author: Tucker Thomas
 * Date: 6/4/2020
 * File: edit.php
 * Description:
 */
?>
<?php
include_once("includes/db.php");
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $album = $_POST['album'];
    $artist = $_POST['artist'];
    $production_date = $_POST['production_date'];
    $label = $_POST['label'];
    $number_of_discs = $_POST['number_of_discs'];
    $price = $_POST['price'];
    $genre_id = $_POST['genre_id'];
    $description = $_POST['description'];
    if (empty($album) || empty($artist) || empty($production_date) || empty($label) || empty($number_of_discs) || empty($price) || empty($genre_id) || empty($description)) {
        if (empty($album)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if (empty($artist)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }if (empty($production_date)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }if (empty($label)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }if (empty($number_of_discs)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }if (empty($price)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }if (empty($genre_id)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }if (empty($description)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }
    } else {
        $result = mysqli_query($connect, "UPDATE recordstore_db.records SET album='$album',artist='$artist',production_date='$production_date',label='$label',number_of_discs='$number_of_discs',price='$price',genre_id='$genre_id',description='$description' WHERE id=$id");
        header("Location: index.php");
    }
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($connect, "SELECT * FROM recordstore_db.records WHERE id=$id");
while ($res = mysqli_fetch_array($result)) {
    $album = $res['album'];
    $artist = $res['artist'];
    $production_date = $res['production_date'];
    $label = $res['label'];
    $number_of_discs = $res['number_of_discs'];
    $price = $res['price'];
    $genre_id = $res['genre_id'];
    $description = $res['description'];
}
?>
<html lang="en">
<head>
    <title>Edit Data</title>
</head>

<body>
<a href="index.php">Home</a>
<br/><br/>

<form name="form1" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Album</td>
            <td><input type="text" name="album" value="<?php echo $album; ?>"></td>
        </tr>
        <tr>
            <td>Artist</td>
            <td><input type="text" name="artist" value="<?php echo $artist; ?>"></td>
        </tr>
        <tr>
            <td>Production Date</td>
            <td><input type="text" name="production_date" value="<?php echo $production_date; ?>"></td>
        </tr>
        <tr>
            <td>Label</td>
            <td><input type="text" name="label" value="<?php echo $label; ?>"></td>
        </tr>
        <tr>
            <td>Number of Discs</td>
            <td><input type="text" name="number_of_discs" value="<?php echo $number_of_discs; ?>"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" value="<?php echo $price; ?>"></td>
        </tr>
        <tr>
            <td>Genre ID</td>
            <td><input type="text" name="genre_id" value="<?php echo $genre_id; ?>"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="decription" value="<?php echo $description; ?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
/**  * Author: Tucker Thomas
 * Date: 6/4/2020
 * File: index.php
 * Description:
 */
?>
<?php
include_once("includes/config.php");
$result = mysqli_query($mysqli, "SELECT * FROM recordstore_db.records ORDER BY id DESC");
?>
<html lang="en">
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

<table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
        <td>Artist</td>
        <td>Album</td>
        <td>Production Date</td>
        <td>Label</td>
        <td>Number of Discs</td>
        <td>Price</td>
        <td>Genre ID</td>
        <td>Description</td>
    </tr>
    <?php
    while ($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $res['artist'] . "</td>";
        echo "<td>" . $res['album'] . "</td>";
        echo "<td>" . $res['production_date'] . "</td>";
        echo "<td>" . $res['label'] . "</td>";
        echo "<td>" . $res['number_of_discs'] . "</td>";
        echo "<td>" . $res['price'] . "</td>";
        echo "<td>" . $res['genre_id'] . "</td>";
        echo "<td>" . $res['description'] . "</td>";
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    }
    ?>
</table>
</body>
</html>
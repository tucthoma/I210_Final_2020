<?php
/**  * Author: Tucker Thomas
 * Date: 5/13/2020
 * File: delete.php
 * Description:SQL for deletion of test database
 */
include("includes/config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM recordstore_db.records WHERE id=$id");
header("Location:index.php");
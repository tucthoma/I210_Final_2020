<?php
/**  * Author: Tucker Thomas
 * Date: 6/4/2020
 * File: db.php
 * Description:database connection for users DB
 */
?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
//add your code
$connect=mysqli_connect("localhost","root","","bookstore_db");
if (mysqli_connect_errno()){
    echo"Failed to connect to MySQL: " . mysqli_connect_error();

}
?>
</body>
</html> 
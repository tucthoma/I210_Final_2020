<?php
/**  * Author: Tucker Thomas
 * Date: 6/4/2020
 * File: auth_session.php
 * Description:Session reload for Login
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
//add your code

session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

?>
</body>
</html> 
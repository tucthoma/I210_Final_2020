<?php
/**  * Author: Tucker Thomas
 * Date: 6/4/2020
 * File: dashboard.php
 * Description:HTML form for User login
 */
?>
<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="www/css/style.css"/>
</head>
<body>
<div class="form">
    <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
    <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
    <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
    <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
    <p>You are now user dashboard page.</p>
    <p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
<?php
/**  * Author: Tucker Thomas
 * Date: 6/4/2020
 * File: logout.php
 * Description:
 */
?>
<?php
session_start();
if (session_destroy()) {
    header("Location: login.php");
}
?>
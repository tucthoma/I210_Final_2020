<?php
/**  * Author: Tucker Thomas
 * Date: 5/13/2020
 * File: config.php
 * Description: Making a connection to my local MariaDB
 */
//php variables for sqli_connect
 $databaseHost='localhost';
 $databaseName='bookstore_db';
 $databaseUsername='root';
 $databasePassword='';
 $mysqli=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);



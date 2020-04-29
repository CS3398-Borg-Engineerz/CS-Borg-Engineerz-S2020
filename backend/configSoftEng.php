<?php
	$databaseHost = '127.0.0.1';//or localhost
    $databaseUsername = 'root'; // root by default for localhost 
    $databasePassword = 'armstrong2018';  // by defualt empty for localhost
    $databaseName = 'studentOrgsDB'; // your db_name

    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>
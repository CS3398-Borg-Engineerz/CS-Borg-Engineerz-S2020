<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['netid']) || empty($_POST['password'])) {
        $error = "NetID or Password is invalid";
    }
    else{
        // Define $netid and $password
        $netid = $_POST['netid'];
        $password = $_POST['password'];
        // mysqli_connect() function opens a new connection to the MySQL server.
        //TODO make sure to create database
        $conn = mysqli_connect("localhost", "root", "password", "studentorgsdb");
        // SQL query to fetch information of registerd users and finds user match.
        $query = "SELECT netid, password from login where netid=? AND password=? LIMIT 1";
        // To protect MySQL injection for Security purpose
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $netid, $password);
        $stmt->execute();
        $stmt->bind_result($netid, $password);
        $stmt->store_result();

        if($stmt->fetch()) { //fetching the contents of the row 
            $_SESSION['login_user'] = $netid; // Initializing Session
            header("location: profile.php"); // Redirecting To Profile Page
        }
    }
    mysqli_close($conn); // Closing Connection
}
?>
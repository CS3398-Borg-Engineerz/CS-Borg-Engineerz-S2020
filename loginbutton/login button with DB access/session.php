<?php
// mysqli_connect() function opens a new connection to the MySQL server.
//TODO make sure to create database
$conn = mysqli_connect("localhost", "root", "password", "studentorgsdb");
// Starting Session
session_start();
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT netid from login where netid = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['netid'];
?>
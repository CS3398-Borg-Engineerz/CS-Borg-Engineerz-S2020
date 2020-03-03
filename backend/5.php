<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Clubs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
       
        /* Header/Logo Title */
        .header {
          padding-top: 40px;
          background: #6A5638;
          color: white;
        }
        .header2 {
          padding-top: 67px;
          background: #501214;
          color: white;
          padding-bottom: 16px;
        }

        body{
            font-size:25px;
            font-family: Arial;
            margin: 0;
        }

        /* Page Content */
        .content {
            padding-top:15%;
        }

        .searchBar{
            margin-left:28%;
            width:40%;
            font-size:20px;
            vertical-align: middle;

        }

        .searchButton{
            vertical-align: middle;
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            width:80px;
            height:26px;
            cursor: pointer;
        }

        .sidebar{
            float:right;
            padding-right:75px;
            padding-top:50px;
        }
        .sidebar button{
            font-size:22px;
            border:none;
            margin:20px;            
        }

        .srchRes{
            margin-left:5%;
        }
        th, td {
            text-align:center;
            width:200px;
        }

        </style>
    </head>
    <body>

        <div class="header"></div> 
        <div class="header2"></div>

        <div class="sidebar">
            <button onclick="window.open('https://www.google.com', '_blank');">Home</button><br><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">Calendar</button><br><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">Events</button><br><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">List</button><br><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">Gallery</button><br><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">Instructions</button><br><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">Settings</button><br><hr>
        </div>

        
    </body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=studentOrgsDB", 'root', 'armstrong2018');// connect to database
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$url = basename($url); //get the name of the club from the url

$sth = $con->prepare("SELECT * FROM `Organization`  WHERE id = '$url'"); //pull from DB where url variable matches the Org name
$sth -> setFetchMode(PDO:: FETCH_OBJ);
$sth -> execute();
$row = $sth -> fetch();

$sth1 = $con->prepare("SELECT * FROM `Events`  WHERE org_id = '$url'"); //pull from DB where url variable matches the Org name
$sth1 -> setFetchMode(PDO:: FETCH_OBJ);
$sth1 -> execute();
$row1 = $sth1 -> fetch();

    
?>
<br><br><br>
<table class="srchRes">
    <tr>
        <th>Club Name</th>
        <th>Category</th>
        <th>Event Location</th>
        <th>Event Time</th>
        <th>Event Day</th>
    </tr>
    <tr>
        <td><?php echo $row -> name;?></td>
        <td><?php echo $row1 -> category?></td>
        <td><?php echo $row1 -> event_location;?></td>
        <td><?php echo $row1 -> event_time;?></td>
        <td><?php echo $row1 -> event_day;?></td>
    </tr>
</table>













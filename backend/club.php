<?php
	session_start();//needed for the variables passing from index.php
?>


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
	include ("configSoftEng.php");//connect to db
	$clubID = $_SESSION['id']; // ID of the club stored in session variable

	$data = $conn->query("SELECT * FROM `Events`  WHERE org_id = '$clubID'"); //pull from DB where the club's id matches the Org id in Events tables

	if($data->num_rows > 0){//make sure there was data found in DB
		$EventData = mysqli_fetch_assoc($data);//Make the data from the query usable
	}
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
        <td><?php echo $_SESSION['name'];//name still stored in session so use it from there?></td>
        <td><?php echo $EventData['category'];//info from table in DB?></td>
        <td><?php echo $EventData['event_location'];?></td>
        <td><?php echo $EventData['event_time'];?></td>
        <td><?php echo $EventData['event_day'];?></td>
    </tr>
</table>
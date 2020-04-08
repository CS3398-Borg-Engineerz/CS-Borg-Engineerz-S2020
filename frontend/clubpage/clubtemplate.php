<?php
    session_start();//needed for the variables passing from index.php
    
	/*include ("configSoftEng.php");//connect to db
	$clubID = $_SESSION['id']; // ID of the club stored in session variable

	$data = $conn->query("SELECT * FROM `Events`  WHERE org_id = '$clubID'"); //pull from DB where the club's id matches the Org id in Events tables

	if($data->num_rows > 0){//make sure there was data found in DB
		$EventData = mysqli_fetch_assoc($data);//Make the data from the query usable
	}*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Clubs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="clubstyle.css">
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
        <div class="left-container">
            <div class="club-name"><p>Club Name</p></div>
            <div class="bio"><p>This is the club bio: <br />
                We are a club that does club things. <br />
                Look at us do club stuff. <br />
                We have all kinds of club stuff. <br />
                From club pizza, to club soda. Oh boy, I sure do love being in a club.<br />
            </p></div>
            <div class="officers"><p>Officers:</p></div>
        </div>
        <div class="right-container">
            <div class="club-logo"></div>
            <div class="meetings"><p>Meeetings:</p></div>
            <div class="dues"><p>Dues:</p></div>
            <div class="contact"><p>Contact:</p></div>
        </div>
        
    </body>
</html>
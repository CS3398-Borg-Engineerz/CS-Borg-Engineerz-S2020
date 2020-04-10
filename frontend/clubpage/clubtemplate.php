<?php
    session_start();//needed for the variables passing from index.php
    
	include ("configSoftEng.php");//connect to db
	$clubID = $_SESSION['id']; // ID of the club stored in session variable

	$data = $conn->query("SELECT * FROM `Events`  WHERE org_id = '$clubID'"); //pull from DB where the club's id matches the Org id in Events tables

	if($data->num_rows > 0){//make sure there was data found in DB
		$EventData = mysqli_fetch_assoc($data);//Make the data from the query usable
    }
    
    $data = $conn->query("SELECT * FROM `leadership`  WHERE org_id = '$clubID'"); //pull from DB where the club's id matches the Org id in Events tables

    if($data->num_rows > 0){
        $LeadershipData = mysqli_fetch_assoc($data);
    }

    $data = $conn->query("SELECT * FROM `meetings`  WHERE org_id = '$clubID'"); //pull from DB where the club's id matches the Org id in Events tables

    if($data->num_rows > 0){
        $MeetingData = mysqli_fetch_assoc($data);
    }

    $data = $conn->query("SELECT dues FROM `Organization`  WHERE id = '$clubID'"); //pull from DB where the club's id matches the Org id in Events tables

    if($data->num_rows > 0){
        $DuesData = mysqli_fetch_assoc($data);
    }

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
            <div class="club-name"><p><?php echo $_SESSION['name'];?></p></div>

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


            <div class="meetings"><p>Meeetings:<?php echo $MeetingData['meeting_day'];?> <?php echo $MeetingData['meeting_time'];?> 
                <?php echo $MeetingData['meeting_location'];?></p></div>

            <div class="dues"><p>Dues: $ <?php echo $DuesData['dues'];?></p></div>

            <div class="contact"><p>Contact info: Club@club.com</p></div>


            <table class="srchRes">
            <tr>
            <th>Category</th>
            <th>Event Location</th>
            <th>Event Time</th>
            <th>Event Day</th>
            </tr>
            <tr>
            <td><?php echo $EventData['category'];//info from table in DB?></td>
            <td><?php echo $EventData['event_location'];?></td>
            <td><?php echo $EventData['event_time'];?></td>
            <td><?php echo $EventData['event_day'];?></td>
            </tr>
            </table>

        </div>
        
        
    </body>
</html>
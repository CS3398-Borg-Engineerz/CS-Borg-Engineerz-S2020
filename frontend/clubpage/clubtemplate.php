<?php
    session_start();//needed for the variables passing from index.php
    
    include ("configSoftEng.php");//connect to db
    
    $clubID = $_SESSION['id']; // ID of the club stored in session variable
    
    $clubName=$_SESSION['name'];

    
    //pulls meeting info from DB
    $data = $conn->query("SELECT * FROM `meetings`  WHERE org_id = '$clubID'"); 

    if($data->num_rows > 0){
        $MeetingData = mysqli_fetch_assoc($data);
    }

    //pulls dues from club table
    $data = $conn->query("SELECT dues FROM `Organization`  WHERE id = '$clubID'"); 

    if($data->num_rows > 0){
        $DuesData = mysqli_fetch_assoc($data);
    }

    $data = $conn->query("SELECT DISTINCT logo FROM `Organization`  WHERE id = '$clubID'");

    if($data->num_rows > 0){
        $logoData = mysqli_fetch_assoc($data);
    }

    $data = $conn->query("SELECT DISTINCT bio FROM `Organization`  WHERE id = '$clubID'");

    if($data->num_rows > 0){
        $bioData = mysqli_fetch_assoc($data);
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

        <div class="flex-container">    <!-- Flow container -->
            <div class="info-container"> 
            <!-- Club Info + Meetings -->
                <!-- Place Holder for Club Logos -->
                <img src="<?php echo $logoData['logo'] ?>" class ="club-info">

                <!-- Posts Club name to page -->
                <div class="club-name"><b><p><?php echo $_SESSION['name'];?></p></b></div>

                <!-- Place holder for Bio -->
                <div class="club-info"><pre style="font-size: 16px; font-family:'Times New Roman', Times, serif" ><?php echo $bioData['bio'] ?></pre></div>

                <!-- Pulls officer info from table sequentially -->
                <div class="club-info"><p><b>Officers: </b><br />
                    <?php
                        $data = $conn->query("SELECT * FROM `member`  WHERE org_name = '$clubName'");  
                        if($data->num_rows > 0){
                            while($row = mysqli_fetch_assoc($data)){
                                foreach($row as $ind => $val)
                                {
                                    if($ind != 'org_name' && $ind != 'graduation_year' && $ind != 'status' && $ind != 'officer_pic'){
                                        echo "$val";
                                        if($ind != 'officer'){
                                            echo ", ";
                                        }
                                        if($ind == 'officer'){
                                            echo "  ";
                                        }
                                    }
                                    
                                }
                                ?><img src="<?php echo $row['officer_pic'] ?>" class ="officer-pic"><?php
                                echo '<br />';
                            }
                        }
                    ?>
                </p></div>

                <!-- Posts Meeting Info to page -->
                <div class="club-info"><p><b>Meeetings:</b><br /><?php echo $MeetingData['meeting_day'];?> <?php echo $MeetingData['meeting_time'];?> 
                    <?php echo $MeetingData['meeting_location'];?></p></div>

                <!-- Posts dues from table to page -->
                <div class="club-info"><p><b>Dues:</b> $ <?php echo $DuesData['dues'];?></p></div>
                
                <!-- Place Holder for contact page -->
                <div class="club-info"><p><b>Contact info:</b> Club@club.com</p></div>
            </div>
            
            <div class="announcement-container">
            <!-- Club Announcements and Jazz -->
            
                <div class="club-announcement">
                <!--Loops through the events table and outputs to page -->
                <p>
                <?php

                    $data = $conn->query("SELECT * FROM `Events`  WHERE org_id = '$clubID'"); 
                    echo "<b>Events</b><hr />";
                    if($data->num_rows > 0){
                        while($row = mysqli_fetch_assoc($data)){
                            foreach($row as $ind => $val)
                            {
                                if($ind != 'org_id'){
                                    echo "$val";
                                    if($ind != 'event_day'){
                                        echo ", ";
                                    }
                                }
                            }
                            echo "<hr />";
                        }
                    }
                ?>
                </p>
                </div>
            </div>
        </div>

    </body>
</html>
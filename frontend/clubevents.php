<?php
	include("header.php");
	include("configSoftEng.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Club Events</title>

        <style>

		.events{
			font-size:23px;
		}

	</style>


    </head>

    <body>
    	<div class="events" style="padding-right:250px;margin-left:50px; margin-top:50px">
    	<h1>Events</h1><hr>
    	<h2>A list of all the events that are planned for a quick look up.</h2>
    	<br>
    	<?php
    		$clubID = 2;
    		$clubName = 
   		    $data = $conn->query("SELECT * FROM `Events`"); 
		    if($data->num_rows > 0){
		        while($row = mysqli_fetch_assoc($data)){
		            foreach($row as $ind => $val)
		            {
		                if($ind != 'org_id'){
		                    echo "$val";
		                    if($ind != 'event_day'){
		                        echo ", ";		                    }
		                }
		            }
                    echo "<hr>";

		        }
		    }
    	?>


    	</div>

    </body>


</html>
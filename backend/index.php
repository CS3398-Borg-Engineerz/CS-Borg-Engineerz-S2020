<?php
	session_start();

	if(isset($_POST['search'])){//if search button pushed
		include ("configSoftEng.php");//connect to db
		$search = $_POST['searchWdPHP'];// $conn->real_escape_string($_POST['searchWdPHP']);//set $search var equal to input
		$data = $conn->query("SELECT id FROM Organization WHERE name LIKE '$search'");//query database to check if the search input exists
		if($data->num_rows > 0){ // if there is a match in the search bar
			$_SESSION['name'] = $search;
			$searchRes = mysqli_fetch_assoc($data);//fetch the data from the query
			$_SESSION['id'] = (int) $searchRes['id'];//get the id of the logged in user and assign it to a session variable. Convert back to an int
			exit ('Search success');
		} else {
			$search = null;
			exit('Not found');
		}

		exit($search . " = " . "" );
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Clubs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script
            src="http://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
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
            margin-left:10%;
        }

        .clubBtn{
            font-size:18px;
            margin-left:20px;
        }
        th, td{
            width:200px;
            text-align:center;
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
            <button  id="list" name="list">List</button><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">Gallery</button><br><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">Instructions</button><br><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">Settings</button><br><hr>
        </div>

        <div class="content">
			<input class="searchBar" type="text" id="input" placeholder="Search...">
			<input class="searchButton" type="button" value="Submit" id="search">
        	<p style="padding-left: 15%;" id="response"></p>
        </div>
        
    </body>
</html>



<script type="text/javascript">
$(document).ready(function() {
	//execute this code after the document has loaded
	$("#search").on('click', function(){//search button pushed
		
		var searchWd = $("#input").val();//set searchWd equal to user input

		if(searchWd == ""){//user entered nothing
			alert("Please check your inputs.");	
		} else { //send if search bar has info
			$.ajax({
				url: 'index.php',
				method: 'POST',
				data:{
					search: 1,
					searchWdPHP: searchWd,
				},
				success: function(response){
					$("#response").html(response);
					if(response.indexOf('success') >= 0){
						window.location = 'club.php';
					}

					if(response.indexOf('Not') >= 0){
						
					}
				},
			});
		}
	});
});
</script>




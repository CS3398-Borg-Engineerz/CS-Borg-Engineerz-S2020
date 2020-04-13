<?php
	session_start();

	if(isset($_POST['search'])){//if search button pushed
		include ("configSoftEng.php");//connect to db
		$search = $_POST['searchWdPHP'];// $conn->real_escape_string($_POST['searchWdPHP']);//set $search var equal to input
		$data = $conn->query("SELECT id FROM Organization WHERE name='$search'");//query database to check if the search input exists
		if($data->num_rows > 0){ // if there is a match in the search bar
			$_SESSION['name'] = $search;
			$searchRes = mysqli_fetch_assoc($data);//fetch the data from the query
			$_SESSION['id'] = (int) $searchRes['id'];//get the id of the logged in user and assign it to a session variable. Convert back to an int
			exit ('Search success');
		} else { 
            include ("configSoftEng.php");//connect to db
            $result = mysqli_query($conn, "SELECT * FROM `Organization`");
            ?>
                <table class="srchRes" style="margin-top:4%">
                    <tr>
                        <th style="text-align:center;">Club Name</th>
                        <th style="text-align:center;">Category</th>
                    </tr>
                </table>
            <?php

            while($row = mysqli_fetch_array($result)){
                ?>
                <table class="srchRes">
                    <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['category'];?></td>
                    </tr>
                </table>
                <?php
            }
			$search = null;
			exit('');
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

        .srchRes{
            margin-left:10%;
            text-align:center;
            font-size:25px;
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


        <?php include("header.php")?> 

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
		$.ajax({
			url: 'search.php',
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
			},
		});
		
	});
});
</script>

<?php
    

?> 
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
            <form method="post">
                <button  type="submit" name="list">List </button><hr>
            </form>
            <button onclick="window.open('https://www.google.com', '_blank');">Gallery</button><br><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">Instructions</button><br><hr>
            <button onclick="window.open('https://www.google.com', '_blank');">Settings</button><br><hr>
        </div>

        <div class="content">
            <form method="post">
                <input class="searchBar" type="text" name="search">
                <input class="searchButton" type="submit" name="submit">
            </form>
        </div>
    </body>
</html>

<?php

$con = mysqli_connect("localhost", "root", "armstrong2018", "studentOrgsDB" );// connect to database

if (isset($_POST["list"])){// if submit button pushed

    $result = mysqli_query($con, "SELECT * FROM `Organization`");
    ?>
        <table class="srchRes" style="margin-top:50px">
            <tr>
                <th>Club Name</th>
                <th>Category</th>
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
}   

$con = new PDO("mysql:host=localhost;dbname=studentOrgsDB", 'root', 'armstrong2018');// connect to database

if (isset($_POST["submit"])){// if submit button pushed
    // set the searched input to variable str
    $str = $_POST["search"];
    $_POST['search'] = $str;

    // find in the database table "search" where the variable in the table "ClubName" matches our str variable
    $sth = $con->prepare("SELECT * FROM `Organization`  WHERE name = '$str'"); 

    // grab the row object from the table 
    $sth -> setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    // try to set the row object to the variable row, if there is a row that matched the str variable then if
    // statement succeeds if sth -> fetch() fails then there was no match with table variable and str variable
    if($row = $sth -> fetch())
    {
        
        ?>
        <br><br><br>
        <table class="srchRes">
            <tr>
                <th>Club Name</th>
                <th>Category</th>
            </tr>
            <tr>
                <td><?php echo $row -> name;?></td>
                <td><?php echo $row -> category;?></td>
                <td>
                <form action="<? echo $row->id?>" method="post">
                    <button class ="clubBtn" type="submit">Go to Club</button>
                </form>
                </td>
            </tr>
        </table>

<?php

    }
    
    else{
        ?>
        <br><br><br>
        <label class="srchRes">
            Club does not exists.
        </label>
        <?php
    }
}
?>
<?php
    include 'dbConn.php';
    $connection = getDatabaseConnection();
    function displayTeam1() {
        $sql = "Select * from IM_teams";
        $records = getDataBySQL($sql);
        foreach ($records as $record) {
            echo '<option value="' . $record[teamName] . ' ">' . $record[teamName] . '</option> ';
        }

    }

    function displayTeam2() {
        $sql = "Select * from IM_teams";
        $records = getDataBySQL($sql);
        foreach ($records as $record) {
            echo '<option value="' . $record[teamName] . ' ">' . $record[teamName] . '</option> ';
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="assets/otterbasketball.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="IM Stats Keeper">
        <meta name="author" content="Bilal, Alex, Ryan">
        <title>Stats</title>
        
        <!-- Font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        
        <!--Navbar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="navbar-brand"><a class="black" href="index.php"><img class="otter-image" src="assets/otterbasketball.png" height="20">CSUMB Stats Keeper</a></div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <form action="edit.php">
        <div class="row">
            <h1 class="text-center">New Game</h1>
        </div>
        <hr>
        <div class="row">
            <div class="text-center col-md-6">
                Select Team 1:
                    <select name="team1">
                        <?php displayTeam1() ?>
                    </select>
                        
            </div>
            <div class="text-center col-md-6">
                Select Team 2:
                    <select name="team2">
                        <?php displayTeam2() ?>
                    </select>
            </div> 
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="center-block">Start Game</button>
            </div>
        </div>
        </form>
    </div>




    </body>
</html>
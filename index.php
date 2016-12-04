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

        <!--Tooltip-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <!--Navbar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="navbar-brand"><img class="otter-image" src="assets/otterbasketball.png" height="20">CSUMB Stats Keeper</div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <img class ="center-block" src="assets/otterbasketball.png" height ="85">
            <h1 class="text-center">
            CSUMB BASKETBALL STATS KEEPER</h1>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <a href="newgame.php"><button class="center-block">Start New Game</button></a>
            </div>
        </div>
    </div>

    <div class="footer" align="center" >
        <a href="#" data-toggle="tooltip" title="A basketball stat tracker that will take track of any basketball game.">Help</a>
    </div>
    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();});
    </script>
</body>
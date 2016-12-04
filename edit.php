<?php 
    include 'dbConn.php';
    $connection = getDatabaseConnection();


    function team1() {
        $sql = 'select * from IM_teams natural join IM_players where teamName = "' . $_GET['team1'] . '"';
        $records = getDataBySQL($sql);
        $i = 0;
        foreach($records as $record) {
          echo '<tr>';
          echo '<td>';
          echo $record['name'];
          echo '</td>';

          echo '<td id="' . $i . '" onClick="increment('. $i .')">0';
          echo '</td>';
          $i++;

          echo '<td id="' . $i . '" onClick="increment('. $i .')">0';
          echo '</td>';
          $i++;

          echo '<td id="' . $i . '" onClick="increment('. $i .')">0';;
          echo '</td>';
          $i++;

          echo '<td id="' . $i . '" onClick="increment('. $i .')">0';;
          echo '</td>';
          $i++;
          
          echo '</tr>';

        }
    }
    function team2() {
        $sql = 'select * from IM_teams natural join IM_players where teamName = "' . $_GET['team2'] . '"';
        $records = getDataBySQL($sql);
        $i = 500;

        foreach($records as $record) {
          echo '<tr>';
          echo '<td>';
          echo $record['name'];
          echo '</td>';

          echo '<td id="' . $i . '" onClick="increment('. $i .')">0';
          echo '</td>';
          $i++;

          echo '<td id="' . $i . '" onClick="increment('. $i .')">0';
          echo '</td>';
          $i++;

          echo '<td id="' . $i . '" onClick="increment('. $i .')">0';;
          echo '</td>';
          $i++;

          echo '<td id="' . $i . '" onClick="increment('. $i .')">0';;
          echo '</td>';
          $i++;
          
          echo '</tr>';

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
        <script src="js/sorttable.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

                <div class="navbar-brand">
                  <a class="black" href="index.php">
                  <img class="otter-image" src="assets/otterbasketball.png" height="20">CSUMB Stats Keeper</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
            <h1 class="text-center">Stats Keeping</h1>
      </div>
      <div><h3><?php echo $_GET['team1']?></h3></div>
    <table class="table sortable">
      <tr>
        <th>Name</th>
        <th>Points</th>
        <th>Rebounds</th>
        <th>Assists</th>
        <th>Fouls</th>
      </tr>
      <?php team1() ?>
    </table>
    
    <div><h3><?php echo $_GET['team2']?></h3></div>
    <table class="table sortable">
      <tr>
        <th>Name</th>
        <th>Points</th>
        <th>Rebounds</th>
        <th>Assists</th>
        <th>Fouls</th>
      </tr>
      <?php team2() ?>
    </table>

     <hr>
        <div class="row">
            <div class="col-md-12">
                <a href="insertStats.php"><button class="center-block">EndGame</button></a>
            </div>
        </div>

    </div>

  


</body>
<script>
    function increment(i) {
      var element = parseInt(document.getElementById(i).innerHTML);
      element = element + 1;
      document.getElementById(i).innerHTML = element;
    }
</script>
    
    
</html>
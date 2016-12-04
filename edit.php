<?php 
echo 'select * from IM_teams natural join IM_players where teamName = "' . $_GET['team1'] . '"';
    include 'dbConn.php';
    $connection = getDatabaseConnection();

    function team1() {
        $sql = 'select * from IM_teams natural join IM_players where teamName = "' . $_GET['team1'] . '"';
        $records = getDataBySQL($sql);

        foreach($records as $record) {
          echo '<tr>';
          echo '<td>';
          echo $record['name'];
          echo '</td>';

          echo '<td>0';
          echo '</td>';

          echo '<td>0';
          echo '</td>';

          echo '<td>0';
          echo '</td>';

          echo '<td>0';
          echo '</td>';
          
          echo '</tr>';

        }
    }
    function team2() {
      
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
<<<<<<< HEAD

                <div class="navbar-brand">
                  <a class="black" href="index.html">
                  <img class="otter-image" src="assets/otterbasketball.png" height="20">CSUMB IM Stats Keeper</a>
                </div>


                <div class="navbar-brand"><a class="black" href="index.html"><img class="otter-image" src="assets/otterbasketball.png" height="20">CSUMB Stats Keeper</a></div>

=======
                <div class="navbar-brand"><a class="black" href="index.html"><img class="otter-image" src="assets/otterbasketball.png" height="20">CSUMB IM Stats Keeper</a></div>
>>>>>>> 36fc5de8d93e55cc8e76fd2c967e40be15f7710a
            </div>
        </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
            <h1 class="text-center">Stats Keeping</h1>
      </div>
      <div><h3><?php echo $_GET['team1']?></h3></div>
    <table class="table">
      <tr>
        <th>Name</th>
        <th>Points</th>
        <th>Rebounds</th>
        <th>Assists</th>
        <th>Fouls</th>
      </tr>
      <?php team1() ?>
    </table>
    
    <div><h3><?php echo $_GET['team1']?></h3></div>
    <table class="table">
      <tr>
        <th>Name</th>
        <th>Points</th>
        <th>Rebounds</th>
        <th>Assists</th>
        <th>Fouls</th>
      </tr>
      <?php team2() ?>
    </table>

    </div>

  


</body>
    
    
</html>

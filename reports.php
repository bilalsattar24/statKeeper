<?php
    include 'dbConn.php';
    $connection = getDatabaseConnection();
    session_start();
    
    function listPlayers() {
        $sql = "SELECT * FROM IM_teams";
        $teams = getDataBySQL($sql);
       
        foreach($teams as $team) {
            echo $team['teamName'];
        }
        
    }
    
    function insertStats() {
       
        $sql =
        "insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (2, 1, 2, 4, 2, 2, 2);
                insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (3, 1, 1, 2, 3, 3, 0);
                insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (4, 1, 2, 5, 0, 1, 2);
                insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (5, 1, 1, 1, 0, 3, 1);
                insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (6, 1, 1, 7, 1, 2, 2);
                insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (7, 1, 1, 6, 1, 0, 2);
                insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (8, 1, 2, 7, 2, 0, 1);
                insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (9, 1, 2, 5, 1, 0, 2);
                insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (10, 1, 2, 2, 2, 2, 2);
                insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (11, 1, 1, 2, 0, 2, 2);
                insert into IM_stats (playerID, gameID, teamID, points, rebounds, assists, fouls) values (12, 1, 1, 0, 3, 1, 1);
            ";
        
         $statement = $connection->prepare($sql);
             $statement->execute($namedParameters);
        
    }
    
    function insertGameLog(){
        $sql =
        "insert into IM_games (gameID, team1_ID, team2_ID, team1_score, team2_score, winner) values (1, 2, 0, 1, 2, 1);";
        
         $statement = $connection->prepare($sql);
             $statement->execute($namedParameters);
    }
    
    function maxPrice() {
        $sql = "SELECT * from cars";
        $records = getDataBySQL($sql);
        $max = $records[0]['price'];
        $maxID = $records[0]['carID'];
        $maxIndex = 0;
        foreach($records as $record) {
            if ($record['price'] > $max) {
                $max = $record['price'];
                $maxID = $record['carID'];
                $maxIndex = $i;
            }

            $i++;
        }
        
        echo '<strong>Highest priced car: </strong></ br>';
        
        echo $records[$maxIndex]['year'] . ' ';
        echo $records[$maxIndex]['make'] . ' ';
        echo $records[$maxIndex]['model'] . ' - ';
        echo '$' . money_format('%i', $records[$maxIndex]['price']);
        
    }
    function minPrice() {
        $sql = "SELECT * from cars";
        $records = getDataBySQL($sql);
        $max = $records[0]['price'];
        $maxID = $records[0]['carID'];
        $minIndex = 0;
        foreach($records as $record) {
            if ($record['price'] < $max) {
                $max = $record['price'];
                $maxID = $record['carID'];
                $minIndex = $i;
            }

            $i++;
        }
        
        echo '<strong>Lowest priced car: </strong></ br>';
        
        echo $records[$minIndex]['year'] . ' ';
        echo $records[$minIndex]['make'] . ' ';
        echo $records[$minIndex]['model'] . ' - ';
        echo '$' . money_format('%i', $records[$minIndex]['price']);
    }
    function total() {
        $sql = "SELECT * from cars";
        $records = getDataBySQL($sql);
        $counter=0;
        foreach($records as $record) {
            $counter++;
        }
        echo '<strong>Number of Cars: </strong>' . $counter;
    }
    function totalPrice() {
        $sql = "SELECT price FROM cars";
        $records = getDataBySQL($sql);
        $total=0;
        foreach($records as $record) {
            $total+= $record['price'];
        }
        echo '<strong>Total cost of inventory: </strong>';
        echo '$' . money_format('%i', $total);
    }
    function totalAdds() {
        $sql = "SELECT carID FROM cars";
        getDataBySQL($sql);
        $max = 1;
        foreach ($records as $record) {
            if ($record['carID'] > $max) {
                $max = $record['carID'];
            }
        }
        
        echo '<strong>All time # of cars: </strong>' . $max;
    }
    

?>

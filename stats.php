<?php
    include 'dbConn.php';
    $connection = getDatabaseConnection();
    session_start();
    
    function listGames() {
        $sql = "SELECT * from IM_games";
        $players = getDataBySQL($sql);
        $max = $records[0]['price'];
        $maxID = $records[0]['carID'];
        $maxIndex = 0;
        foreach($players as $player) {
            echo $player['name'];
        }
        
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
    
    function avgPrice() {
        $sql = "SELECT price FROM cars";
        $records = getDataBySQL($sql);
        $avg = 0;
        $counter=0;
        foreach($records as $record) {
            $avg+=$record['price'];
            $counter++;
        }
        
        setlocale(LC_MONETARY, 'en_US');
        $avg = money_format('%i', round($avg/$counter));
        
        echo '<strong>Average Price:</strong> $' . $avg;
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

    <div>
        <?=avgPrice();?>
            </br>
        <?=maxPrice();?>
            </br>
        <?=minPrice();?>
            </br>
        <?=total();?>
            </br>
        <?=totalPrice();?>
    </div>

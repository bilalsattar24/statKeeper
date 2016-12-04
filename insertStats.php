<?php
        
        include 'dbConn.php';
        $connection = getDatabaseConnection();
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
            $statement->execute();
            header("Location: index.php");
        

?>
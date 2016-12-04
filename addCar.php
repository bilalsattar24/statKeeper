<?php
    include 'dbConn.php';
    $connection = getDatabaseConnection();
    session_start();
    
    if(isset($_GET['addForm'])) {
    $sql = "INSERT INTO 
    cars(year, make, model, cylinders, carTypeID, price, color) 
    VALUES (:year, :make, :model, :cylinders, :carTypeID, :price, :color)";
     
    $namedParameters = array();
    $namedParameters[':year'] = $_GET['year'];
    $namedParameters[':make'] = ucfirst($_GET['make']);
    $namedParameters[':model'] = ucfirst($_GET['model']);
    $namedParameters[':color'] = ucfirst($_GET['color']);
    $namedParameters[':cylinders'] = $_GET['cylinders'];
    $namedParameters[':carTypeID'] = $_GET['carTypeID'];
    $namedParameters[':price'] = $_GET['price'];
    
    $statement = $connection->prepare($sql);
    $statement->execute($namedParameters);

    header("Location: adminpanel.php");
    
    }
?>


<!DOCTYPE HTML>
<html>

<head>
    <title>

    </title>
</head>

<body>
    <h1>Add a new car</h1>
    <div>
        <form>
            Year:
            <input type="text" name="year">
            </br>
            Make:
            <input type="text" name="make">
            </br>
            Model:
            <input type="text" name="model">
            </br>
            Color:
            <input type="text" name="color">
            </br>

            Price: $
            <input type="text" name="price">
            </br>
            Cylinders:
            <select name="cylinders">
                <option value=4>4</option>
                <option value=6>6</option>
                <option value=8>8</option>
            </select>
            </br>

            Type:
            <select name="type">
                <option value=1>Sedan</option>
                <option value=2>Coupe</option>
                <option value=3>SUV</option>
                <option value=4>Van</option>
            </select>
            </br>

            <input type="submit" name="addForm" value="Add Now" />
        </form>
    </div>
</body>

</html>
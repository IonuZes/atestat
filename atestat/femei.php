<?php
include "mysql.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    $title = "Femei - ZesSneakers";
    include 'header.php';
    ?>

    <?php

    $connection = new mysqli("localhost", "root", "", "sneaker_store");

    if ($connection->connect_error) {
        die("Conexiunea a eșuat: " . $connection->connect_error);
    }

    $query = "
        SELECT s.id, s.Model, s.Marimi, s.Pret, i.nume_imagine 
        FROM sneakers s
        LEFT JOIN Imagini i ON s.id = i.id_sneaker
        WHERE s.Marimi LIKE '%37%' 
           OR s.Marimi LIKE '%38%' 
           OR s.Marimi LIKE '%39%' 
           OR s.Marimi LIKE '%40%'
    ";
    $model1 = "Nike Air Jordan 1";
    $model2 = "Louis Vuitton Skate";
    $model3 = "Lanvin Curb";
    $model4 = "Maison Mihara Yasuhiro";
    $model5 = "Rick Owens DRKSHDW";
    $model6 = "Nike Air Force 1";
    $result = $connection->query($query);
    echo "<div class='categories'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='category'>";
        $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "default.png";
        if($row["Model"] == $model1){
            echo "<a href='/atestat/sneaker_pages/jordan1.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model2){
            echo "<a href='/atestat/sneaker_pages/sk8.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model3){
            echo "<a href='/atestat/sneaker_pages/curb.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model4){
            echo "<a href='/atestat/sneaker_pages/mihara.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model5){
            echo "<a href='/atestat/sneaker_pages/rick.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else{
            echo "<a href='/atestat/sneaker_pages/af1.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }
        echo "<p>" . $row["Model"] . "</p>";
        echo "<p>Marimi disponibile:" . $row["Marimi"] . "</p>";
        echo "<p class='price'>" . $row["Pret"] . " RON</p>";
        echo "</div>";
    }

    echo "</div>";

    $connection->close();
    ?>

    <script src="" async defer></script>
</body>
<?php include 'footer.php'; ?>

</html>
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
    $title = "Barbati - ZesSneakers";
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
        WHERE s.Marimi LIKE '%40%' 
           OR s.Marimi LIKE '%41%' 
           OR s.Marimi LIKE '%42%' 
           OR s.Marimi LIKE '%43%' 
           OR s.Marimi LIKE '%44%' 
           OR s.Marimi LIKE '%45%'
    ";
    $model1 = "Timberland 6 Inch Boot";
    $model2 = "Balenciaga Track";
    $model3 = "Nike Air Jordan 1";
    $model4 = "Louis Vuitton Skate";
    $model5 = "Lanvin Curb";
    $model6 = "Off-White Out Of Office";
    $model7 = "Off-White Be Right Back";
    $model8 = "Dior B30";
    $model9 = "Christian Louboutin Astroloub";
    $model10 = "Rick Owens DRKSHDW";
    $model11 = "Nike Air Force 1";
    $result = $connection->query($query);
    echo "<div class='categories'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='category'>";
        $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "default.png";
        echo "<a href='/atestat/sneaker_pages/af1.php?id=".$row['id']."'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
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
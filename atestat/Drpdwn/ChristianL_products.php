<?php
$title = "ChristianL - Products";
include "mysql.php";
include "header.php";
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
    $stmt = $connection->prepare("
        SELECT s.Model, s.Marimi, s.Pret, i.nume_imagine 
        FROM sneakers s
        LEFT JOIN Imagini i ON s.id = i.id_sneaker
        WHERE s.Marca = ?
    ");
    $marca = "Christian Louboutin";
    $stmt->bind_param("s", $marca);
    $stmt->execute();
    $result = $stmt->get_result();
    echo "<div class='categories'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='category'>";
        echo "<p>" . $row["Model"] . "</p>";
        echo "<p>Marimi disponibile: " . $row["Marimi"] . "</p>";
        echo "<p class='price'>" . $row["Pret"] . " RON</p>";
        $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "track.png";
        echo "<a href='/atestat/sneaker_pages/cla.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        echo "</div>";
    }
    echo "</div>";
    ?>
    <script src="" async defer></script>
</body>
<?php include "footer.php";?>
</html>
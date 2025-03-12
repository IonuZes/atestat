<?php
$title = "Rezultatele Căutării - ZesSneakers";
include 'header.php';
include 'mysql.php';
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
$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if (!empty($query)) {
    $sql ="SELECT s.id, s.Model, s.Marimi, s.Pret, i.nume_imagine 
        FROM sneakers s
        LEFT JOIN Imagini i ON s.id = i.id_sneaker WHERE marca LIKE ? OR model LIKE ?";
    $stmt = $connection->prepare($sql);
    $searchTerm = "%" . $query . "%";
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = null;
}
?>
<?php
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
 $model12 = "Maison Mihara Yasuhiro";
echo "<div class='categories'>";
    echo "<h1>Rezultatele căutării pentru: '<?php echo htmlspecialchars($query); ?>'</h1>";
    
    echo "<div class='categories'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='category'>";
        $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "default.png";
        if($row["Model"] == $model1){
            echo "<a href='/atestat/sneaker_pages/timbs.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model2){
            echo "<a href='/atestat/sneaker_pages/track.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model3){
            echo "<a href='/atestat/sneaker_pages/jordan1.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model4){
            echo "<a href='/atestat/sneaker_pages/sk8.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model5){
            echo "<a href='/atestat/sneaker_pages/curb.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model6){
            echo "<a href='/atestat/sneaker_pages/oof.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model7){
            echo "<a href='/atestat/sneaker_pages/brb.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model8){
            echo "<a href='/atestat/sneaker_pages/b30.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model9){
            echo "<a href='/atestat/sneaker_pages/cla.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model10){
            echo "<a href='/atestat/sneaker_pages/rick.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model12){
            echo "<a href='/atestat/sneaker_pages/mihara.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else{
            echo "<a href='/atestat/sneaker_pages/af1.php'><img src='/atestat/img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }
        echo "<p>" . $row["Model"] . "</p>";
        echo "<p>Marimi disponibile:" . $row["Marimi"] . "</p>";
        echo "<p class='price'>" . $row["Pret"] . " RON</p>";
        echo "</div>";
    }

    echo "</div>";
echo "</div>";
?>
</body>
<?php include 'footer.php'; ?>
</html>
<?php
$title = "HomePage - ZesSneakers";
include "mysql.php";
include 'header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZesSneakers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- TODO: Go for css -->
    <div class="categories">
        <div class="category">
            <a href="./sneaker_pages/timbs.php"><img src="./img/timbs.png" alt="Timbs" class="img"></a>
            <div class="text-block">
                <h4>Timberland 6 Inch Boots</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Timberland 6 Inch Boot";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/jordan1.php"><img src="./img/Jordan1.png" alt="Jordan 1" class="img"></a>
            <div class="text-block">
                <h4>Jordan 1 High</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Nike Air Jordan 1";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/af1.php"><img src="./img/af1.png" alt="Air Force 1" class="img"></a>
            <div class="text-block">
                <h4>Air Force 1</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Nike Air Force 1";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/sk8.php"><img src="./img/sk8.png" alt="SK8" class="img"></a>
            <div class="text-block">
                <h4>Louis Vuitton Skate</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Louis Vuitton Skate";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/track.php"><img src="./img/tracks.png" alt="Track" class="img1"></a>
            <div class="text-block">
                <h4>Balenciaga Track</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Balenciaga Track";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/curb.php"><img src="./img/lanvinc.png" alt="Curb" class="img"></a>
            <div class="text-block">
                <h4>Lanvin Curb</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Lanvin Curb";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";;
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/brb.php"><img src="./img/BRB.png" alt="BRB" class="img"></a>
            <div class="text-block">
                <h4>Off-White Be Right Back</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Off-White Be Right Back";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/b30.php"><img src="./img/diorb30.png" alt="B30" class="img"></a>
            <div class="text-block">
                <h4>Dior B30</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Dior B30";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/oof.php"><img src="./img/oof.png" alt="OOF" class="img"></a>
            <div class="text-block">
                <h4>Off White Out Of Office</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Off-White Out Of Office";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/cla.php"><img src="./img/CLA.png" alt="CLA" class="img"></a>
            <div class="text-block">
                <h4>Christian Louboutin Astroloub</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Christian Louboutin Astroloub";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/rick.php"><img src="./img/ro.png" alt="ro" class="img"></a>
            <div class="text-block">
                <h4>Rick Owens DRKSHDW</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Rick Owens DRKSHDW";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="category">
            <a href="./sneaker_pages/mihara.php"><img src="./img/mm.png" alt="mm" class="img"></a>
            <div class="text-block">
                <h4>Maison Mihara Yasuhiro</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Maison Mihara Yasuhiro";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . $row["Marimi"] . "</p>";
                    echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <script src="" async defer></script>
</body>
<?php include 'footer.php'; ?>

</html>
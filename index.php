<?php
include("mysql.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZesSneakers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .image {
            opacity: 1;
            display: block;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .image:hover {
            opacity: 0.3;
        }

        .text {
            background-color: #04AA6D;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }
    </style>
</head>

<body>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<td>Marca</td>";
    echo "<td>Model</td>";
    echo "<td>Marimi</td>";
    echo "<td>Pret</td>";
    echo "</tr>";
    $stmt = $connection->prepare("select * from sneakers");
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["marca"] . "</td>";
        echo "<td>" . $row["model"] . "</td>";
        echo "<td>" . $row["marimi"] . "</td>";
        echo "<td>" . $row["pret"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <div class="row">
        <div class="column">
            <img src="./img/timbs.png" alt="Timbs" class="image" width="300" height="200">
            <div class="text-block">
                <h4>Timberland 6 Inch Boot</h4>
                <p>What a beautifulq sunrise</p>
            </div>
        </div>

        <div class="column">
            <img src="./img/Jordan1.png" alt="Jordan 1" class="image" width="300" height="200">
            <div class="text-block">
                <h4>Jordan 1 High</h4>
                <p>What a beautiful sunrise</p>
            </div>
        </div>

        <div class="column">
            <img src="./img/af1.png" alt="Air Force 1" class="image" width="300" height="200">
            <div class="text-block">
                <h4>Air Force 1</h4>
                <p>What a beautiful sunrise</p>
            </div>
        </div>

        <div class="column">
            <img src="./img/asics_gel.png" alt="Gel kayano" class="image" width="300" height="200">
            <div class="text-block">
                <h4>Asics Gel</h4>
                <p>What a beautiful sunrise</p>
            </div>
        </div>
    </div>

    <script src="" async defer></script>
</body>

</html>
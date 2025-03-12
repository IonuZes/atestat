<?php
$title = "Fearless - View";
include("mysql.php");
include ('header.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="container">
        <div class="left-column">
            <img src="/atestat/img/Jordan1.png" class="active">
        </div>

        <div class="right-column">
            <div class="product-description">
                <span>Nike Air</span>
                <h2>JORDAN 1</h2>
                <p>Primul model din seria Jordan, lansat în 1985. Este considerat unul dintre cele mai influente sneakers din toate timpurile, purtat de Michael Jordan în primul său sezon NBA.</p>
            </div>

            <div class="product-price">
                <span class="price">750 RON</span>
            </div>

            <div class="product-size">
                <span>38 | 42 | 43 | 44</span>
            </div>
        </div>
    </main>
    <div class="logi">
        <a href="https://www.nike.com/ro/men" target="_blank"><img src="/atestat/brand-logo/nikes.png" alt="" width="500" height="400"></a>
    </div>
    <script src="" async defer></script>
</body>
<?php include ('footer.php'); ?>
</html>
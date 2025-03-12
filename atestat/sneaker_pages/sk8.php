<?php
$title = "sk8 - View";
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
            <img src="/atestat/img/sk8.png" class="active">
        </div>

        <div class="right-column">
            <div class="product-description">
                <span>Louis Vuitton</span>
                <h2>Skate</h2>
                <p>O reinterpretare de lux a sneaker-urilor inspirate din cultura skateboarding-ului, combinând materiale premium cu un design modern și elegant.</p>
            </div>

            <div class="product-price">
                <span class="price">1900 RON</span>
            </div>

            <div class="product-size">
                <span>37 | 42 | 43</span>
            </div>
        </div>
    </main>
    <div class="logi">
        <a href="https://fr.louisvuitton.com/fra-fr/homepage" target="_blank"><img src="/atestat/brand-logo/LV.png" alt="" width="500" height="300"></a>
    </div>
    <script src="" async defer></script>
</body>
<?php include ('footer.php');?>
</html>
<?php
$title = "DRKSHDW - View";
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
            <img src="/atestat/img/ro.png" class="active">
        </div>

        <div class="right-column">
            <div class="product-description">
                <span>Rick Owens</span>
                <h2>DRKSHDW</h2>
                <p>Un sneaker avant-garde, cunoscut pentru silueta sa alungită și stilul neconvențional, specific lui Rick Owens.</p>
            </div>

            <div class="product-price">
                <span class="price">3000 RON</span>
            </div>

            <div class="product-size">
                <span>40 | 41 | 43 | 44 | 45</span>
            </div>
        </div>
    </main>
    <div class="logi">
        <a href="https://www.rickowens.eu/en/US" target="_blank"><img src="/atestat/brand-logo/RickOwens.png" alt="" width="500" height="300"></a>
    </div>
    <script src="" async defer></script>
</body>
<?php include ('footer.php'); ?>
</html>
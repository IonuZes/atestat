<?php
$title = "Curb - View";
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
            <img src="/atestat/img/Lanvinc.png" class="active">
        </div>

        <div class="right-column">
            <div class="product-description">
                <span>Lanvin</span>
                <h2>Curb</h2>
                <p>Un sneaker masiv, cu influențe din anii ’90, renumit pentru șireturile late și designul statement. O alegere perfectă pentru cei care iubesc stilul extravagant.</p>
            </div>
            
            <div class="product-price">
                <span class="price">2000 RON</span>
            </div>

            <div class="product-size">
                <span>40 | 42 | 43</span>
            </div>
        </div>
    </main>
    <div class="logi">
        <a href="https://us.lanvin.com/" target="_blank"><img src="/atestat/brand-logo/lanvin.png" alt="" width="500" height="400"></a>
    </div>
    <script src="" async defer></script>
</body>
<?php include ('footer.php'); ?>
</html>
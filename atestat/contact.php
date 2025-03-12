<?php
$title = "Contact - ZesSneakers";
include("mysql.php");
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
include 'header.php';
?>

<div class="container">
    <h1>Contact</h1>
        <ul>
            <li><strong class="color"> Pentru orice informații, nu ezitați să ne contactezi folosind detaliile de mai jos:</strong></li>
        </ul>
    <div class="section">
        <h2>Date de contact</h2>
        <ul>
            <li><strong class="color">Fondator: Oniciu Ionut </strong></li>
            <li><strong class="color">Co-Fondator: Oniciu Andreea</strong></li>
            <li><strong class="color">Email: contact@zessneakers.ro</strong></li>
            <li><strong class="color">Telefon: +40 755 123 456</strong></li>
        </ul>
    </div>

    <div class="section">
        <h2>Magazinele noastre</h2>
        <ul>
            <li><strong class="color">Magazin Deva: Strada Libertății nr. 10, Deva, Hunedoara</strong></li>
            <li><strong class="color">Magazin Hunedoara: Bulevardul Dacia nr. 25, Hunedoara</strong></li>
        </ul>
    </div>

    <div class="section">
        <h2>Program</h2>
        <ul>
            <li><strong class="color">Luni - Vineri: 10:00 - 19:00</strong></li>
            <li><strong class="color">Sâmbătă - Duminică: 10:00 - 16:00</strong></li>
        </ul>
    </div>
</div>

</body>
<?php include 'footer.php'; ?>

</html>
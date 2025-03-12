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
$title = "Despre noi - ZesSneakers";
include 'header.php';
?>

<div class="container">
    <div class="section">
        <h1>Despre ZesSneakers</h1>
        <p>ZesSneakers este locul unde pasiunea pentru sneakersi se întâlnește cu stilul și calitatea. Suntem o echipă dedicată care își dorește să aducă cele mai noi și populare modele de sneakersi pentru toți iubitorii de încălțăminte sport.</p>
    </div>
    <div class="section">
        <h2>Misiunea noastră</h2>
        <p>Ne dorim să oferim clienților noștri produse de calitate, confort și stil, venind mereu cu cele mai recente lansări de la branduri celebre.</p>
    </div>

    <div class="section">
        <h2>Echipa noastră</h2>
        <p>Suntem o echipă formată din iubitori de sneakersi, fiecare membru având o vastă experiență în domeniu.</p>
    </div>

    <h2>Magazinele noastre</h2>

    <div class="section">
        <h3>Magazin Deva</h3>
        <img src="./img/magazin1.jpg" alt="Magazin ZesSneakers Deva">
        <p><strong>Adresă:</strong> Strada Libertății nr. 10, Deva, Hunedoara</p>
    </div>

    <div class="section">
        <h3>Magazin Hunedoara</h3>
        <img src="./img/magazin2.jpg" alt="Magazin ZesSneakers Hunedoara">
        <p><strong>Adresă:</strong> Bulevardul Dacia nr. 25, Hunedoara</p>
    </div>

    <h2>De ce să ne alegi?</h2>
    <ul>
        <li><strong class="color">O gamă variată de sneakersi de la branduri cunoscute</strong></li>
        <li><strong class="color">Prețuri competitive și oferte speciale</strong></li>
        <li><strong class="color">Consultanță profesională</strong></li>
        <li><strong class="color">Livrare rapidă și retur facil</strong></li>
    </ul>
</div>

</body>
<?php include 'footer.php'; ?>

</html>
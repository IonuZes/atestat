<?php
session_start();
require 'mysql.php'; // Conectarea la baza de date

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $street = $_POST['street'];
    
    // Salvare fiecare produs din coș în baza de date
    foreach ($_SESSION['cart'] as $item) {
        $product_id = $item['product_id'];
        $price = $item['price'];
        
        $query = "INSERT INTO orders (product_id, price, first_name, last_name, email, country, state, city, postal_code, street) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("idssssssss", $product_id, $price, $first_name, $last_name, $email, $country, $state, $city, $postal_code, $street);
        $stmt->execute();
    }
    
    // Golire coș după plasarea comenzii
    $_SESSION['cart'] = [];
    header("Location: thank_you.php");
    exit();
}
?>

<form method="POST" action="checkout.php">
    <input type="text" name="first_name" placeholder="Prenume" required>
    <input type="text" name="last_name" placeholder="Nume" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="country" placeholder="Țara" required>
    <input type="text" name="state" placeholder="Județ" required>
    <input type="text" name="city" placeholder="Oraș" required>
    <input type="text" name="postal_code" placeholder="Cod poștal" required>
    <input type="text" name="street" placeholder="Strada" required>
    <button type="submit">Finalizează comanda</button>
</form>

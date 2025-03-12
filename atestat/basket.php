<?php
    // Afișare coș și buton de continuare comandă
        echo "<h2>Coșul tău</h2>";
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                    echo "Produs: " . $item['name'] . " - Preț: " . $item['Price'] . " RON<br>";
                }
                echo '<a href="checkout.php"><button>Continuă să comanzi</button></a>';
            } else {
                echo "Coșul este gol.";
            }
?>
<?php
$title = "AF1 - View";
include("mysql.php");
include ('header.php');

    session_start();
    $id = intval($_GET['id']);
    $query = "select sneakers.id, sneakers.Model, sneakers.Marimi, sneakers.Pret, sneakers.Marca, sneakers.Descriere, sneakers.Site, sneakers.Site_img, imagini.nume_imagine from sneakers join imagini on sneakers.id = imagini.id_sneaker where id = ?;";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        die("Produsul nu există.");
    }

    $product = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['size'])) {
        $size = $_POST['size'];
        
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $_SESSION['cart'][] = [
            'id' => $product['id'],
            'model' => $product['Model'],
            'size' => $size,
            'price' => $product['Pret']
        ];
        
        header("Location: cos.php");
        exit();
    }
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
            <img src="/atestat/img/<?php echo $product['nume_imagine']?>" class="active">
        </div>

        <div class="right-column">
            <div class="product-description">
                <span><?php echo $product['Marca']?></span>
                <h2><?php echo $product['Model']?></h2>
                <p><?php echo $product['Descriere']?></p>
            </div>
            
            <div class="product-price">
                <span class="price"><?php echo $product['Pret']?> RON</span>
            </div>

            <div class="product-size">
                <span><?php echo $product['Marimi']?></span>
            </div>
            <div class="add_cart">
                <h1><?php echo htmlspecialchars($product['Model']); ?></h1>
                <p>Preț: <?php echo $product['Pret']; ?> RON</p>
                
                <form method="post">
                    <label for="size">Alege mărimea:</label>
                    <select name="size" id="size" required>
                        <?php 
                        $sizes = explode(", ", $product['Marimi']);
                        foreach ($sizes as $size) {
                            echo "<option value='" . htmlspecialchars($size) . "'>" . htmlspecialchars($size) . "</option>";
                        }
                        ?>
                    </select>
                    <button type="submit">Adaugă în coș</button>
                </form>
            </div>
        </div>
    </main>
    <div class="logi">
        
    <a href="<?php echo $product['Site']?>" target="_blank"><img src="/atestat/brand-logo/<?php echo $product['Site_img']?>" alt="" width="500" height="400"></a>
    </div>
    <script src="" async defer></script>
</body>
<?php include ('footer.php'); ?>
</html>
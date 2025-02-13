<?php
    include("mysql.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <?php
            $stmt = $connection->prepare("select * from table1");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = mysqli_fetch_assoc($result)){
                echo "<p>".$row["nume"]."</p>";
            }
        ?>
        <p>hello</p>
        <p>hello</p>
        <?php
        ?>
        <p>hello</p>
        <p>hello</p>
        
        <script src="" async defer></script>
    </body>
</html>
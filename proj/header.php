<?php
$currentUrl = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html>
    <head>  
        <link rel="stylesheet" href="css/styles.css">
        <link rel="apple-touch-icon" sizes="180x180" href="favi/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favi/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favi/favicon-16x16.png">
        <link rel="manifest" href="favi/site.webmanifest">
    </head>
    <body>
        <a href="home.php"><img src="images/target.png" alt="target" style="width:150px;height:150px;"></a>
        <div class="topnav">
            <a href="history.php" <?php if ($currentUrl == '/proj/history.php') echo 'class="active"'; ?>>History</a>
            <a href="timeline.php" <?php if ($currentUrl == '/proj/timeline.php') echo 'class="active"'; ?>>Timeline</a>  
            <a href="rules.php" <?php if ($currentUrl == '/proj/rules.php') echo 'class="active"'; ?>>Rules</a>
            <a href="equipment.php" <?php if ($currentUrl == '/proj/equipment.php') echo 'class="active"'; ?>>Equipment</a>
            <a href="anatomies.php" <?php if ($currentUrl == '/proj/anatomies.php') echo 'class="active"'; ?>>Anatomies</a>
            <a href="archers.php" <?php if ($currentUrl == '/proj/archers.php') echo 'class="active"'; ?>>Famous Archers</a>
            <a href="products.php" <?php if ($currentUrl == '/proj/products.php') echo 'class="active"'; ?>>Top Products</a>
        </div> 
    </body>
</html>
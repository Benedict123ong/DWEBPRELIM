<?php include "includes/header.php" ?>

<?php
$username = "Ben";
$greeting = "Hello, $username";
$offer = [
    'Chocolate Dream Cake', 
    2,
    1000,
    800];


$usual_price = $offer[1] * $offer[2];
$offer_price = $offer[3] * $offer[1];
$saving = $usual_price - $offer_price;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<h2><?=$greeting?></h2>
<p>Buy <?=$offer[1]?> whole <?=$offer[0]?> for <?=$offer_price?> </p>
<p>Usual Price: <?=$usual_price?></p>

</body>
</html>

<?php include "includes/footer.php" ?>

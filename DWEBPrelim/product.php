<?php
$name = "Ben";
$greeting = "Hello, Ben";
$product = ["Chocolate Dream Cake"];
$cost = [10];
$total = [];

if ($name) {
    $greeting = "Welcome back, $name!";
}

for ($i = 1; $i <= 15; $i++) {
    $subtotal = $cost * $i;
    $discount = $cost /100 *4;
    $total[$i] = $subtotal - $discount;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE Land</title>
</head>
<?php include "includes/header.php"?>
<body>
    <p><?= $name?></p>
    <p><?= $greeting?></p>

    <table>
        <tr>
            <th>
                Box
            </th>
            <th>
                Price
            </th>
        </tr>
    <?php foreach ($total as $quantity => $price);?>
        <tr>
            <td>
                <?= $quantity?>
                <?php
                ($quantity == 1 ) ? $display = "Box" : $display = "Box";
                echo $display; ?>
            </td>
            <td><?=$price?></td>
        </tr>
        <?php endforeach?>
    </table>
</body>
<?php include "includes/footer.php" ?>
</html>




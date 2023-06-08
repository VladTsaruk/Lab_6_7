<?php 
    include 'H:\xampp\htdocs\tsaruk\BLL\main.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php 
    $allZones = getAllZones();
    foreach ($allZones as $key => $value) {
        ?> 
        <p><?= $key ?> => <?= $value->getName(); ?></p>
        <?php }?></p>
    <?= createZone(); ?>
    <p><?php 
    $allZones = getAllZones();
    foreach ($allZones as $key => $value) {
        ?> 
        <p><?= $key ?> => <?= $value->getName(); ?></p>
        <?php } ?></p>
    <?php //deleteZone(2); ?>
    <?php updateZoneName(5, 'ASD'); ?>
    <p><?php 
    $allZones = getAllZones();
    foreach ($allZones as $key => $value) {
        ?> 
        <p><?= $key ?> => <?= $value->getName(); ?></p>
        <?php } ?></p>
    <?php 
        $attractions = getAllAttractions();
        $order = $attractions[0]->getPrice();
        $order += $attractions[2]->getPrice();
        $order += $attractions[3]->getPrice();
        echo makeKeyOrder($order);
    ?> 
    <?=
        orderHero(2);
    ?>
</body>
</html>
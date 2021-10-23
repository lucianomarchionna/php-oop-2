<?php
    require 'products.php';
    require_once 'users.php';
    require 'premium_users.php';
    
    $products = [
        new products("Mouse Logitech", "55.99 €"),
        new products("Monitor 24 pollici Samsung", "190.89 €"),
        new products("Webcam Ekacom", "15.50 €"),
        new products("Tastiera Aukey", "40 €"),
        new products("Processore I7-9700K", "289.89 €"),
        new products("Dissipatore a liquido", "60 €"),
        new products("Tappetino con i led", "13.35 €"),
        new products("Tappetino con i led", "13.35 €"),
        new products("Ram 16gb con led", "155.76 €"),
        new products("SSD", "99,89")
    ];
    
    try {
        $users = [
            new users("Paolo", "Dossetto", 60),
            new users("Luciano", "Marchionna", 21),
            new users("Giulia", "Fiore", 16),
            new users("Giuseppe", "Cipro", 43),
            new users("Guglielmo", "Bitetti", 15),
            new users("Giorgio", "Piccoli", 13),
            new users("Francesca", "Fari", 26)
    
        ];

        $premium_users = [
            new premium("Michele", "Bianchi", 29),
            new premium("Simona", "Tari", 18),
            new premium("Mirco", "Denaro", 52)
        ];
        $premium_users[0]->setDiscount("20%");
        $premium_users[1]->setDiscount("40%");
        $premium_users[2]->setDiscount("50%");

    } catch(Exception $err){
        echo $err->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secondo step con i nostri oggetti</title>
</head>
<body>
    <h2>PRODOTTI DISPONIBILI</h2>
    <?php
        foreach($products as $product) {?>
            <p><?php echo $product->getName() . " - " . $product->getPrice()?></p>
    <?php } ?>
    <h2>UTENTI</h2>
    <?php
        foreach($users as $user) {?>
            <p><?php echo $user->getName() . " " . $user->getSurname() . " (" . $user->getAge() . "anni" . ")"?></p>
    <?php } ?>
    <h2>UTENTI PREMIUM</h2>
    <?php
        foreach($premium_users as $premium_user) {?>
            <p><?php echo $premium_user->getName() . " " . $premium_user->getSurname() . "  (" . $premium_user->getAge() . " anni). Ha diritto a uno sconto del " . $premium_user->getDiscount();?></p>
    <?php } ?>
</body>
</html>
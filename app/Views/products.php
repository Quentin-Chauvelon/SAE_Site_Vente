<?php
require_once (APPPATH  . 'Controllers' . DIRECTORY_SEPARATOR . 'GetController.php');
require_once APPPATH  . 'Controllers' . DIRECTORY_SEPARATOR . 'GetExtensionImage.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href=<?= site_url() . "css/products.css"?>>
	<title>Hot genre</title>
</head>

<body>

    <?php include 'header.php';?>

    <div class="products_container">
        <?php foreach($products as $product) : ?>
            <div class="product">
                <a href="<?= url_to(getRoute('display'), $product->id_produit) ?>">
                    <div class="image_container">
                        <!-- <div class="rupture_stock <?= (array_search($product->id_produit, $produitsRuptureStock) !== false) ? "en_rupture" : "" ?>">RUPTURE DE STOCK</div> -->
                        <div class="rupture_stock2 <?= (array_search($product->id_produit, $produitsRuptureStock) !== false) ? "en_rupture" : "" ?>">RUPTURE DE STOCK</div>

                        <?php
                            $extension = getExtensionImage("images/produits/" . $product->id_produit . "/images/image_1");
                        ?>

                        <img src=<?= site_url() . "images/produits" . DIRECTORY_SEPARATOR . $product->id_produit . DIRECTORY_SEPARATOR . "images/image_1" . $extension ?>>

                        <div class="<?= (array_search($product->id_produit, $produitsRuptureStock) !== false) ? "rupture_stock_grise" : "" ?>"></div>
                    </div>
                </a>

                <h3><?= $product->nom ?></h3>
                <h2><?= sprintf('%01.2f€', (float)$product->prix / 100); ?></h2>
            </div>
        <?php endforeach; ?>
    </div>

    <?php include 'footer.php';?>

</body>
</html>

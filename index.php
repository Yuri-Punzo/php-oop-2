<!--
Consegna:
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo,
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

BONUS (Opzionale):
- Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store,
oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
- Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.
-->

<?php
require __DIR__ . "/models/Product.php";
require __DIR__ . "/models/User.php";
require __DIR__ . "/models/Category.php";
require __DIR__ . "/models/Type.php";

$products = [
    $lettieraPerGatti = new Product("https://m.media-amazon.com/images/I/61nz0M6JqtL._AC_UL320_.jpg", "Lettiera per Gatti", 63, new Category("gatti"), new Type("prodotto")),
    $ossoGiocattolo = new Product("https://m.media-amazon.com/images/I/71aSf2AiBNL._AC_SX679_.jpg", "Osso Giocattolo", 25, new Category("cani"), new Type("giocattolo"))
];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Pet Store</title>

</head>

<body>
    <div class="container pt-5">
        <div class="row pt-5">
            <?php foreach ($products as $product) : ?>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body" style="height: 600px;">
                            <img style="width:200px" src="<?= $product->image ?>" alt="">
                            <!-- /image -->
                            <h2><?= $product->title ?></h2>
                            <!-- /title -->
                            <div><?= $product->price ?></div>
                            <!-- /price -->

                            <img style="width:100px" src="<?= $product->category->category ?>" alt="">
                            <!-- /CategoryIcon -->
                            <p><?= $product->type->type ?></p>
                            <!-- /type -->
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>
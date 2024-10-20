<?php
require_once __DIR__ . '/../mvc/Controller/productController.php';
require_once __DIR__ . '/../mvc/Model/productModel.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'products':
        $productController = new ProductController();
        $productController->listProducts();
        break;

    case 'home':
    default:
        //echo 'Bienvenue sur la page d\'accueil.';
        break;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Techno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 id="h1" >Bienvenue dans notre boutique E-Techno</h1> 
    </header>

    <main>
        <section id="products">
            <h2>Nos produits</h2>
            <div class="product" id="product1">
                <h3>Smartphone</h3>
                <img src="../images/smartphone.png" alt="Smartphone">
                <p>Prix : 499€</p>
                <button onclick="addToCart('Smartphone', 499)">Ajouter au panier</button>
            </div>
            <div class="product" id="product2">
                <h3>Ordinateur Portable </h3>
                <img src="../images/ordinateur.png" alt="Ordinateur Portable">
                <p>Prix : 899€</p>
                <button onclick="addToCart('Ordinateur Portable', 899)">Ajouter au panier</button>
            </div>
            <div class="product" id="product3">
                <h3>Casque Bluetooth </h3>
                <img src="../images/casque.png" alt="Casque Bluetooth ">
                <p>Prix : 149€</p>
                <button onclick="addToCart('Casque Bluetooth', 149)">Ajouter au panier</button>
            </div>
        </section>
     
        <section id="cart">
            <h2>Votre panier</h2>
            <ul id="cartItems"></ul>
            <p id="totalPrice">Total : 0€</p>
        </section>
    </main>

    <footer>
        <p>@ Boutique de Technologie : <a href="http://localhost:8080/php/projetE-commerceHediBoissard/public/?page=products">Voir les autres produits disponibles</a></p>
    </footer>

    <script src="app.js"></script>
</body>
</html>

<?php

require_once __DIR__ . '/../Model/productModel.php';

class ProductController {
    public function listProducts() {
        $productModel = new ProductModel();
        $products = $productModel->getProducts();
        require_once __DIR__ . '/../View/productsView.php';
    }
}
?>
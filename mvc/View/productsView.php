<?php if (!empty($products)): ?>
    <h1>Liste des Produits Disponible</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <strong><?php echo htmlspecialchars($product['name']); ?></strong>
                - <?php echo htmlspecialchars($product['price']); ?> €
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun produit trouvé.</p>
<?php endif; ?>
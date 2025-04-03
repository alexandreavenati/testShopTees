<!-- Importation du header -->
<?php require_once('partial/header.php'); ?>

<section>

    <h2>Create a command</h2>
    <!-- Création d'un formulaire -->

    <!-- Message d'erreur -->
    <h3><?php echo $message; ?></h3>
   

    <!-- Récupère la commande de l'utilisateur -->
    <?php if (findOrderByUser()) { ?>
        <!-- Je récupère la commande -->
        <h3>Pending order : <?php echo $OrderByUser["quantity"]; ?> : <?php echo $OrderByUser["product"]; ?></h3>
    <?php } ?>

    <form method="post">

        <!-- Champ de type texte pour mettre la quantité que l'on veut -->
        <label for="quantity">Quantity
            <input type="number" name="quantity" placeholder="Enter your quantity here..." id="quantity">
        </label>

        <!-- Champ de type selection pour sélectionner un produit -->
        <label for="product">
            <select name="product" id="product">
                <option value="" disabled selected>--Please choose a product--</option>
                <!-- Création d'une boucle pour avoir les produits sélectionnables dans le select à partir du tableau products
                 du repository -->
                <?php foreach ($products as $product) { ?>
                    <option value="<?php echo $product; ?>"><?php echo $product; ?></option>
                <?php } ?>
            </select>
        </label>

        <button type="submit">Send Order</button>
    </form>

</section>

</main>
</body>

</html>
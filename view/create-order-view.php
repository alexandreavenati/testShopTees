<!-- Importation du header -->
<?php require_once('partial/header.php'); ?>

<section>

    <h2>Create a command</h2>
    <!-- Création d'un formulaire -->

    <!-- Vérification de la présence d'une clé (order) dans mon espace de stockage de session, 
     si oui j'affiche le message ci-dessous contenant les informations à l'intérieur  -->
    <?php if (array_key_exists("order", $_SESSION)) { ?>
        <h3>Pending order : <?php echo $_SESSION["order"]["quantity"]; ?> : <?php echo $_SESSION["order"]["product"]; ?></h3>
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
                <option value="tee-shirt_Mario">Tee-shirt Mario</option>
                <option value="tee-shirt_Wario">Tee-shirt Wario</option>
            </select>
        </label>

        <button type="submit">Send Order</button>
    </form>

</section>

</main>
</body>

</html>
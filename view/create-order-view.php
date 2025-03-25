<!-- Importation du header -->
<?php require_once('partial/header.php'); ?>

<section>

    <h2>Create a command</h2>
    <!-- Création d'un formulaire -->
    <form method="post">

        <!-- Champ de type texte pour mettre la quantité que l'on veut -->
        <label for="quantity">Quantity
            <input type="number" name="quantity" placeholder="Enter your quantity here..." id="quantity">
        </label>

        <!-- Champ de type selection pour dsélectionner un produit -->
        <label for="product">
            <select name="product" id="product">
                <option value="tee-shirt Mario">Tee-shirt Mario</option>
                <option value="tee-shirt Wario">Tee-shirt Wario</option>
            </select>
        </label>

        <button type="submit">Send Order</button>
    </form>

    <!-- Utilisation de la variable $message du controller de ce fichier -->
    <h3><?php echo $message ?></h3>

</section>

</main>
</body>

</html>
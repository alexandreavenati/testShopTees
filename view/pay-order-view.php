<?php require_once('partial/header.php'); ?>

<section>

    <h2>Proceed to payment</h2>

    <!-- Récupère la commande de l'utilisateur -->
    <?php if (findOrderByUser()) { ?>
        <!-- Je récupère la commande -->
        <h3><?php echo $orderByUser["quantity"]; ?> : <?php echo $orderByUser["product"]; ?></h3>
        <!-- Date au format Année, mois, jour -->
        <p>Created on <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
        <!-- Statut de la commande -->
        <h3>Your order status is : "<?php echo $orderByUser['status'] ?>"</h3>

        <form method="POST">
            <div><button type="submit">Pay Order</button></div>
        </form>

    <?php } else { ?>
        <h3>No order in progress...</h3>
    <?php } ?>

</section>

</main>
</body>

</html>
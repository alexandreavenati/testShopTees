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

        <!-- Formulaire pour payer la commande -->
        <?php if ($orderByUser['status'] === "CART") { ?>
            <form method="POST">
                <div><button type="submit">Pay Order</button></div>
            </form>

            <!-- Permet d'aller sur la page pour annuler le paiement en cas d'erreur -->
        <?php } elseif ($orderByUser['status'] === "PAID") { ?>
            <a href="../controller/cancel-order-controller.php">Go to cancel payment</a>
        <?php } else { ?>
            <h3>Order was cancelled</h3>
        <?php } ?>

        <!-- Vérifie si il y a une commande -->
    <?php } else { ?>
        <h3>No order in progress...</h3>
    <?php } ?>

</section>

</main>
</body>

</html>

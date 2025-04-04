<?php require_once('partial/header.php'); ?>

<section>

    <h2>Cancel order payment</h2>

    <!-- Récupère la commande de l'utilisateur -->
    <?php if (findOrderByUser()) { ?>
        <!-- Je récupère la commande -->
        <h3><?php echo $orderByUser["quantity"]; ?> : <?php echo $orderByUser["product"]; ?></h3>
        <!-- Date au format Année, mois, jour -->
        <p>Created on <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
        <!-- Statut de la commande -->
        <h3>Your order status is : "<?php echo $orderByUser['status'] ?>"</h3>

        <!-- Formulaire pour annuler la commande si elle est au statut "PAID" -->
        <?php if ($orderByUser['status'] === "PAID") { ?>
            <form method="POST">
                <div><button type="submit">Cancel Order</button></div>
            </form>
        
            <!-- Vérifie si le statut est déjà "CANCELLED" -->
        <?php } elseif ($orderByUser['status'] === "CANCELLED") { ?>
            <p>Your order has already been cancelled.</p>

            <!-- Vérifie si il n'a pas le statut "PAID" -->
        <?php } else { ?>
            <h3>Order cannot be cancelled unless it is paid.</h3>
        <?php } ?>

        <!-- Vérifie si il y a une commande -->
    <?php } else { ?>
        <h3>No order to cancel...</h3>
    <?php } ?>

</section>

</main>
</body>

</html>

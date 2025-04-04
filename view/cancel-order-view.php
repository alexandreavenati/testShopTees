<?php require_once('partial/header.php'); ?>

<section>

    <h2>Cancel order payment</h2>

    <h3><?php echo $message; ?></h3>

	<?php if ($orderByUser) {?>
		<h3> <?php echo $orderByUser['product']; ?> :  <?php echo $orderByUser['quantity']; ?></h3>
		<p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
		<h3>Votre commande est en statut : "<?php echo $orderByUser['status']; ?>"</h3>


		<form method="post">
			<button type="submit">Cancel Order</button>
		</form>

	<?php } else { ?>
		<h3>No order to cancel...</h3>
	<?php } ?>

</section>

</main>
</body>

</html>
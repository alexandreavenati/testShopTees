<?php

require_once('../config.php');

// message au chargement de la page (base)
$message = "";

// condition qui vérifie l'envoi des valeurs dans le formulaire
if (array_key_exists("quantity", $_POST) && 
	array_key_exists("product", $_POST))
{
    // stockage des valeurs envoyées
	$product = $_POST["product"];
	$quantity = $_POST["quantity"];

    // message à afficher avec les valeurs enregistrées
	$message = "Votre commande contient : " .  $quantity . " " . $product . "!";
}

// Importation du fichier create-order-view (fichier avec le html)
require_once('../view/create-order-view.php');


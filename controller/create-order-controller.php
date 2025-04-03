<?php

require_once('../config.php');
// Appel du repository pour afficher les choix de produits dans la view
require_once('../model/product-repository.php');

//Je démarre la session : création d'un identifiant unique et l'associe à une zone de stockage sur le serveur,
// qui l'envoie au navigateur (cookie)
session_start();

// condition qui vérifie l'envoi des valeurs dans le formulaire
if (array_key_exists("quantity", $_POST) && 
	array_key_exists("product", $_POST))
{
    // stockage des valeurs envoyées
	$order = [
        "product" => $_POST["product"],
        "quantity" => $_POST["quantity"]
    ];

    // Ajout dans ma zone de stockage (session serveur) la commande créée
    $_SESSION["order"] = $order;
}

// Importation du fichier create-order-view (fichier avec le html)
require_once('../view/create-order-view.php');


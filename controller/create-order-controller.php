<?php
// le contrôleur : 

// récupère les données de requête (GET, POST etc etc)
// appelle le(s) répository pour récupérer les données (bdd, session)
// créé des variables / fonctions etc, pour simplifier l'utilisation des données dans la view
// renvoie une réponse contenant le HTML généré par la view

require_once('../config.php');
// Appel du repository pour afficher les choix de produits dans la view
require_once('../model/product-repository.php');
require_once('../model/order-repository.php');

$message = "";
//Je démarre la session : création d'un identifiant unique et l'associe à une zone de stockage sur le serveur,
// qui l'envoie au navigateur (cookie)
session_start();

// condition qui vérifie l'envoi des valeurs dans le formulaire
if (
    array_key_exists("quantity", $_POST) &&
    array_key_exists("product", $_POST)
) {
    $order = createOrder($_POST['product'], $_POST['quantity']);

    //Si il y a une commande on la garde, sinon on envoie un msg d'erreur
    if ($order) {
        saveOrder($order);
    } else {
        $message = "Order cannot be processed";
    }
}

$orderByUser = findOrderByUser();

// Importation du fichier create-order-view (fichier avec le html)
require_once('../view/create-order-view.php');

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

$message = "";  // Variable pour stocker les messages d'erreur

//Je démarre la session : création d'un identifiant unique et l'associe à une zone de stockage sur le serveur,
// qui l'envoie au navigateur (cookie)
session_start();

// Vérifie si le formulaire a été soumis
if (array_key_exists("quantity", $_POST) && array_key_exists("product", $_POST)) {
    try {
        // Tente de créer la commande
        $order = createOrder($_POST['product'], $_POST['quantity']);
        
        // Si la commande est valide, on la sauvegarde dans la session
        saveOrder($order);
    } catch (Exception $e) {
        // Si une exception est levée, on capture l'erreur et on la stocke dans la variable $message
        $message = $e->getMessage();
    }
}

// Récupère la commande de l'utilisateur si elle existe dans la session
$orderByUser = findOrderByUser();

// Inclut la vue pour afficher le formulaire
require_once('../view/create-order-view.php');
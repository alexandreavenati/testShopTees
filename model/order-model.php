<?php 
// Je crée une classe
class Order {

    // je lui donne une variable "product" qui représentera le produit de la commande
    public $product;

    // je lui donne une variable "quantity" qui représentera la quantité du produit de la commande
    public $quantity;

    // je lui donne une variable "createdAt" qui représentera la date de création de la commande
    public $createdAt;

    // je lui donne une variable "status" qui représentera le statut de la commande
    public $status;
}

// je crée un objet qui aura toutes les propriétées définies de la classe
$order = new Order();
// je définis le produit de la commande
$order->product = "Tee-shirt Mario";
// je définis la quantité de produit
$order->quantity = "2";
// je définis la date de création de la commande
$order->createdAt = new DateTime();
// je définis le statut de la commande
$order->status = "CART";
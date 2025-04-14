<?php
// Je crée une classe
class Order
{

    // je lui donne une variable "product" qui représentera le produit de la commande
    public $product;

    // je lui donne une variable "quantity" qui représentera la quantité du produit de la commande
    public $quantity;

    // je lui donne une variable "createdAt" qui représentera la date de création de la commande
    public $createdAt;

    // je lui donne une variable "status" qui représentera le statut de la commande
    public $status;


    public function __construct($product, $quantity) {
        // règle de commande
        if ($quantity <= 0) {
            // création d'une exception si la quantité est <= à 0
            throw new Exception("Quantity is lesser than or equal to 0");
        } else if ($quantity > 3) {
            // création d'une exception si la quantité est > à 3
            throw new Exception("Quantity is greater than 3");
        } else {
            // je définis le produit de la commande
            $this->product = $product;
            // je définis la quantité de produit
            $this->quantity = $quantity;
            // je définis la date de création de la commande
            $this->createdAt = new DateTime();
            // je définis le statut de la commande
            $this->status = "CART";
        }
    }
}

$product = "Tee-shirt Mario";
$quantity = 3;

// je crée un objet qui aura toutes les propriétées définies de la classe
$order = new Order($product, $quantity);
var_dump($order);
die;

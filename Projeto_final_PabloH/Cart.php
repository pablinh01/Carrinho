<?php
// Cart.php
class Cart {
    public function __construct() {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function add(Product $product) {
        $id = $product->getId();
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] += $product->getQuantity();
        } else {
            $_SESSION['cart'][$id] = [
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'quantity' => $product->getQuantity()
            ];
        }
    }

    public function getItems() {
        return $_SESSION['cart'];
    }
}
?>

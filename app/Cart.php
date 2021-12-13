<?php
namespace App;

class Cart
{
    public $items; //Array
    public $totalQuantity;
    public $totalPrice;

    public function __construct($cart)
    {
        if ($cart != null) {
            $this->items = $cart->items;
            $this->totalQuantity = $cart->totalQuantity;
            $this->totalPrice = $cart->totalPrice;
        } else {
            $this->items = [];
            $this->totalQuantity = 0;
            $this->totalPrice = 0;
        }
    }

    public function addItem($id,$product)
    {
        $price = (int)($product->product_price);

        $productToAdd = ['quantity'=>1, 'totalSinglePrice'=>$price, 'data'=>$product];

        $this->items[$id] = $productToAdd;
        $this->totalQuantity++;
        $this->totalPrice = $this->totalPrice + $price;
    }

    public function updatePriceQuantity()
    {
        $totalPrice = 0;
        $totalQuantity = 0;

        foreach ($this->items as $item) {
            $totalPrice = $totalPrice + $item['totalSinglePrice'];
            $totalQuantity = $totalQuantity + $item['quantity'];
        }

        $this->totalPrice = $totalPrice;
        $this->totalQuantity = $totalQuantity;
    }
}
?>
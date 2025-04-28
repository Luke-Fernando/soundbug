<!-- Handles the shopping cart logic.

Functions:

addToCart($trackId) – Add a track to cart

removeFromCart($trackId) – Remove track

viewCart() – View current cart

checkout() – Start checkout

applyCoupon($code) – Optional: handle discount logic -->
<?php

class CartController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function collections()
    {
        $data = [
            "user" => $this->user,
            "page_topic" => "Collections"
        ];
        $this->view("collections", $data);
    }
}

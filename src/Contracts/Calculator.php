<?php

namespace LeviZwannah\Shoppingcart\Contracts;

use LeviZwannah\Shoppingcart\CartItem;

interface Calculator
{
    public static function getAttribute(string $attribute, CartItem $cartItem);
}

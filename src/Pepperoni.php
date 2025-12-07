<?php

namespace user\laba6;

use user\lib\Pizza;

class Pepperoni extends Pizza
{
    public function __construct()
    {
        parent::__construct("Пепперони", "Томатный соус", ["Пепперони", "Моцарелла"]);
    }
}

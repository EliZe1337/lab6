<?php
namespace user\laba6;

use user\lib\Pizza;

class Cheese extends Pizza
{
    public function __construct()
    {
        parent::__construct("Сырная пицца", "Томатный соус", ["Моцарелла", "Пармезан"]);
    }
}

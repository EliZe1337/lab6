<?php

namespace user\laba6;

use user\laba6\Cheese;
use user\laba6\Pepperoni;
use user\lib\PizzaStore;
use user\laba6\Vegan;

class ItalianPizzaStore extends PizzaStore
{
    public function createPizza(string $type):string
    {
        switch ($type) {
            case 'cheese':
                return new Cheese();
            case 'pepperoni':
                return new Pepperoni();
            case 'vegan':
                return new Vegan();
        }
    }
}

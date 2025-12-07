<?php

namespace user\laba6;

use user\lib\Pizza;

class Vegan extends Pizza
{
    public function __construct()
    {
        parent::__construct("Вегетарианская", "Песто", ["Оливки", "Грибы", "Помидоры"]);
    }
}

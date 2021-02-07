<?php

namespace App\Facades;

use App\Contracts\ContractCart;
use Illuminate\Support\Facades\Facade;

class Cart extends Facade {

    protected static function getFacadeAccessor(): string
    {
        return 'App\Contracts\ContractCart';
    }
}

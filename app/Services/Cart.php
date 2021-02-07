<?php

namespace App\Services;

use App\Contracts\ContractCart;
use Illuminate\Http\Request;

class Cart implements ContractCart {

    private $session;

    public function __construct(Request $request)
    {
        $this->session = $request->session();
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }

    public function total()
    {
        // TODO: Implement total() method.
    }

    public function items()
    {
        // TODO: Implement items() method.
    }

    public function addItem()
    {
        // TODO: Implement addItem() method.
    }

    public function deleteItem()
    {
        // TODO: Implement deleteItem() method.
    }
}

<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShopOrder;
use App\Models\ShopOrderPosition;
use App\Models\ShopProduct;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $shopProducts = ShopProduct::orderBy('id', 'desc')
            ->take(3)
            ->get();

        $users = User::orderBy('id', 'desc')
            ->take(8)
            ->get();

        $shopOrders = ShopOrder::with(['status'])
            ->orderBy('id', 'desc')
            ->take(8)
            ->get();

//        $test = ShopOrderPosition::find(1);
//
//        dd($test->product);

        $shopOrdersCount = ShopOrder::count();

        $usersCount = User::count();

        $data = ['shopProducts', 'users', 'shopOrders', 'shopOrdersCount', 'usersCount'];

        return view('admin.home', compact($data));
    }
}

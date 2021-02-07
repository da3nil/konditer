<?php

namespace App\Http\Controllers;

use App\Models\ShopOrder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = ShopOrder::with('status')->where('user_id', \Auth::user()->id)->get();

        return view('home', compact('orders'));
    }
}

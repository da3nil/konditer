<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShopOrderStoreRequest;
use App\Http\Requests\ShopOrderUpdateRequest;
use App\Models\ShopOrder;
use App\Models\ShopOrderPosition;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShopOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ShopOrderStoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ShopOrderStoreRequest $request)
    {
        $data = $request->all();

        $order = (new ShopOrder())->fill($data);

        $order->save();

        $products = Cart::content();

        foreach ($products as $product) {
            for ($i = 0; $i < $product->qty; $i++) {
                $orderPosition = new ShopOrderPosition();
                $orderPosition->shop_order_id = $order->id;
                $orderPosition->shop_product_id = $product->model->id;
                $orderPosition->save();
            }
        }

        Cart::destroy();

        return back()->with(['success' => 'Ваш заказ принят.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

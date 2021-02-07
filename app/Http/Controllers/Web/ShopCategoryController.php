<?php

namespace App\Http\Controllers\Web;

use App\Models\ShopProduct;
Use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use App\Models\ShopCategory;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ShopCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $data = ShopCategory::paginate(10);

        return view('shop.menu', compact('data'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($slug)
    {
//        //$product = ShopProduct::findOrFail(1)->toArray();
//
////        Cart::add('1', 'Product 1', 1, 300, 100);
////        Cart::add('2', 'Product 2', 1, 300, 100);
////        Cart::add('3', 'Product 3', 1, 300, 100);
//
////        Cart::store('username2');
//
//        //Cart::instance('wishlist')->store('username');
//
//        dd(Cart::content());

        $category = ShopCategory::whereSlug($slug)->with(['product'])->first();

        if ($category === null) {
            abort(404);
        }

        $perPage = 10; $page = null; $options = [];

        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $products = new LengthAwarePaginator($category->product->forPage($page, $perPage), $category->product->count(), $perPage, $page, $options);

        $products->setPath($slug);

        return view('shop.category', compact('category', 'products'));
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

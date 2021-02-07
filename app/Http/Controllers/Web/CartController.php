<?php

namespace App\Http\Controllers\Web;

use App\Models\ShopProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('shop.cart');
    }

    public function add(int $id): \Illuminate\Http\RedirectResponse
    {
        $item = ShopProduct::findOrFail($id);

        $cartItem = Cart::add($id, $item->name, 1, $item->price, 0);

        Cart::associate($cartItem->rowId, ShopProduct::class);

        return back()
            ->with(['success' => 'Товар успешно добавлен в корзину']);
    }

    public function del($rowId)
    {
        Cart::remove($rowId);

        return back()
            ->with(['success' => 'Товар успешно удален из корзины']);
    }

    public function clear()
    {
        Cart::destroy();

        return back()
            ->with(['success' => 'Корзина очищена']);
    }
}

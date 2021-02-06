<?php

namespace App\Observers;

use App\Models\ShopOrder;
use App\Models\ShopOrderPosition;

class ShopOrderPositionObserver
{
    public function creating(ShopOrderPosition $shopOrderPosition)
    {

    }

    /**
     * Handle the shop order position "created" event.
     *
     * @param  \App\Models\ShopOrderPosition  $shopOrderPosition
     * @return void
     *
     * @var $order \App\Models\ShopOrder
     */
    public function created(ShopOrderPosition $shopOrderPosition)
    {
        $order = $shopOrderPosition->order;

        $order->price = $shopOrderPosition->order->price += $shopOrderPosition->product->price;

        $order->save();
    }

    /**
     * Handle the shop order position "updated" event.
     *
     * @param  \App\Models\ShopOrderPosition  $shopOrderPosition
     * @return void
     */
    public function updated(ShopOrderPosition $shopOrderPosition)
    {
        //
    }

    /**
     * Handle the shop order position "deleted" event.
     *
     * @param  \App\Models\ShopOrderPosition  $shopOrderPosition
     * @return void
     */
    public function deleted(ShopOrderPosition $shopOrderPosition)
    {
        $order = $shopOrderPosition->order;

        $order->price = $shopOrderPosition->order->price -= $shopOrderPosition->product->price;

        $order->save();
    }

    /**
     * Handle the shop order position "restored" event.
     *
     * @param  \App\Models\ShopOrderPosition  $shopOrderPosition
     * @return void
     */
    public function restored(ShopOrderPosition $shopOrderPosition)
    {
        $order = $shopOrderPosition->order;

        $order->price = $shopOrderPosition->order->price += $shopOrderPosition->product->price;

        $order->save();
    }

    /**
     * Handle the shop order position "force deleted" event.
     *
     * @param  \App\Models\ShopOrderPosition  $shopOrderPosition
     * @return void
     */
    public function forceDeleted(ShopOrderPosition $shopOrderPosition)
    {
        $order = $shopOrderPosition->order;

        $order->price = $shopOrderPosition->order->price -= $shopOrderPosition->product->price;

        $order->save();
    }
}

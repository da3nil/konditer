<?php

namespace App\Observers;

use App\Models\ShopOrder;
use App\Models\User;

class ShopOrderObserver
{
    public function creating(ShopOrder $shopOrder)
    {
        if ($shopOrder->isDirty('user_id')) {
            if ($shopOrder->user_id !== 0) {
                $user = User::findOrFail($shopOrder->user_id);
                $shopOrder->user_name = $user->name;
                $shopOrder->user_email = $user->email;
            }
        }
    }

    /**
     * Handle the shop order "created" event.
     *
     * @param  \App\Models\ShopOrder  $shopOrder
     * @return void
     */
    public function created(ShopOrder $shopOrder)
    {

    }

    /**
     * Handle the shop order "updated" event.
     *
     * @param  \App\Models\ShopOrder  $shopOrder
     * @return void
     */
    public function updated(ShopOrder $shopOrder)
    {
        //
    }

    /**
     * Handle the shop order "deleted" event.
     *
     * @param  \App\Models\ShopOrder  $shopOrder
     * @return void
     */
    public function deleted(ShopOrder $shopOrder)
    {
        //
    }

    /**
     * Handle the shop order "restored" event.
     *
     * @param  \App\Models\ShopOrder  $shopOrder
     * @return void
     */
    public function restored(ShopOrder $shopOrder)
    {
        //
    }

    /**
     * Handle the shop order "force deleted" event.
     *
     * @param  \App\Models\ShopOrder  $shopOrder
     * @return void
     */
    public function forceDeleted(ShopOrder $shopOrder)
    {
        //
    }
}

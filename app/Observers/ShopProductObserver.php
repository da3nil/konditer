<?php

namespace App\Observers;

use App\Models\ShopProduct;

class ShopProductObserver
{
    public function creating(ShopProduct $shopProduct)
    {
        if ($shopProduct->isClean('description')){
            $shopProduct->description = "Без описания";
        }
    }

    /**
     * Handle the shop product "created" event.
     *
     * @param  \App\Models\ShopProduct  $shopProduct
     * @return void
     */
    public function created(ShopProduct $shopProduct)
    {
        //
    }

    /**
     * Handle the shop product "updated" event.
     *
     * @param  \App\Models\ShopProduct  $shopProduct
     * @return void
     */
    public function updated(ShopProduct $shopProduct)
    {
        //
    }

    /**
     * Handle the shop product "deleted" event.
     *
     * @param  \App\Models\ShopProduct  $shopProduct
     * @return void
     */
    public function deleted(ShopProduct $shopProduct)
    {
        //
    }

    /**
     * Handle the shop product "restored" event.
     *
     * @param  \App\Models\ShopProduct  $shopProduct
     * @return void
     */
    public function restored(ShopProduct $shopProduct)
    {
        //
    }

    /**
     * Handle the shop product "force deleted" event.
     *
     * @param  \App\Models\ShopProduct  $shopProduct
     * @return void
     */
    public function forceDeleted(ShopProduct $shopProduct)
    {
        //
    }
}

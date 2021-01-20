<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ShopOrderPosition
 *
 * @property int $id
 * @property int $shop_order_id
 * @property int $shop_product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderPosition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderPosition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderPosition query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderPosition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderPosition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderPosition whereShopOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderPosition whereShopProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderPosition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ShopOrderPosition extends Model
{
    //
}

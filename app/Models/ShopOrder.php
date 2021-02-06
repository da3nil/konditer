<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ShopOrder
 *
 * @property int $id
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrder whereUserId($value)
 * @mixin \Eloquent
 * @property int $shop_order_status_id
 * @property-read \App\Models\ShopOrderStatus $status
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrder whereShopOrderStatusId($value)
 */
class ShopOrder extends Model
{
    protected $fillable = ['shop_order_status_id'];

    public function status() {
        return $this->belongsTo('App\Models\ShopOrderStatus', 'shop_order_status_id');
    }
}

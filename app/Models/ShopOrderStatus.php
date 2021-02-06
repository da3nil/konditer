<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ShopOrderStatus
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderStatus query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $class
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ShopOrder[] $order
 * @property-read int|null $order_count
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderStatus whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopOrderStatus whereUpdatedAt($value)
 */
class ShopOrderStatus extends Model
{
    public function order()
    {
        return $this->hasMany('App\Models\ShopOrder');
    }
}

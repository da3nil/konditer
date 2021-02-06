<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ShopProduct
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property string $img
 * @property int $shop_category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereShopCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ShopProduct extends Model
{
    public function shopCategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\ShopProduct');
    }
}

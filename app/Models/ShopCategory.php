<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ShopCategory
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCategory whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ShopCategory extends Model
{
    //
}

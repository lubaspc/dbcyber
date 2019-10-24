<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\repairs
 *
 * @property int $id
 * @property string|null $description
 * @property float $cost
 * @property string $duration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\repairs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\repairs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\repairs query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\repairs whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\repairs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\repairs whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\repairs whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\repairs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\repairs whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $active
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\repairs whereActive($value)
 */
class repairs extends Model
{
    protected $table="repairs";

    public static function asMap(){
        return self::pluck('description','id');
    }
}

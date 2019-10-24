<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\brand
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\brand whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class brand extends Model
{
    protected $table = "brands";
    protected $fillable = [ 'name'];

    public static function asMap(){
        return self::pluck('name','id');
    }
}

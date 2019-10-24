<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\typeTeam
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\typeTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\typeTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\typeTeam query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\typeTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\typeTeam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\typeTeam whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\typeTeam whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class typeTeam extends Model
{
    protected $table = "type_teams";
    protected $fillable = ['name'];

    public static function asMap(){
        return self::pluck('name','id');
    }
}

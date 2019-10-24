<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\product
 *
 * @property int $id
 * @property int $fk_id_type_teams
 * @property int $fk_id_brand
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\product whereFkIdBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\product whereFkIdTypeTeams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\product whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Http\Models\brand $brand
 * @property-read \App\Http\Models\typeTeam $typeTeam
 */
class product extends Model
{
    protected $table = "products";
    protected $fillable = ['fk_id_brand', 'fk_id_type_teams'];

    public function brand(){
        return $this->belongsTo(
            brand::class,
            'fk_id_brand',
            'id'
        );
    }

    public function typeTeam(){
        return $this->belongsTo(
            typeTeam::class,
            'fk_id_type_teams',
            'id'
        );
    }
}

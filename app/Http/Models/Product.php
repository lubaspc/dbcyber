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
 */
class product extends Model
{
    //
}

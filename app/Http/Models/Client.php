<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\client
 *
 * @property int $id
 * @property string $name
 * @property string|null $direction
 * @property int|null $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\client query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\client whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\client wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\client whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class client extends Model
{
    //
}

<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\update
 *
 * @property int $id
 * @property float|null $budget
 * @property string|null $description
 * @property int $fk_id_work
 * @property int $fk_id_repair
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\update newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\update newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\update query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\update whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\update whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\update whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\update whereFkIdRepair($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\update whereFkIdWork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\update whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\update whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Http\Models\repairs $repair
 * @property-read \App\Http\Models\work $work
 */
class update extends Model
{
    protected $table = "updates";

    public function work(){
        return $this->belongsTo(
            work::class,
            'fk_id_work',
            'id'
        );
    }

    public function repair(){
        return $this->belongsTo(
            repairs::class,
            'fk_id_repair',
            'id'
        );
    }
}

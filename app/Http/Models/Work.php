<?php

namespace App\Http\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\work
 *
 * @property int $id
 * @property string $date_reception
 * @property string|null $date_estimated
 * @property int $status
 * @property string $date_delivery
 * @property float $cost_total
 * @property int $fk_id_client
 * @property int $fk_id_user
 * @property int $fk_id_product
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereCostTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereDateDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereDateEstimated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereDateReception($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereFkIdClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereFkIdProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereFkIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $active
 * @property-read \App\Http\Models\client $client
 * @property-read \App\Http\Models\product $product
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\work whereActive($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Http\Models\repairs[] $repairs
 * @property-read int|null $repairs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Http\Models\update[] $updats
 * @property-read int|null $updats_count
 */
class work extends Model
{
    protected $table = "works";

    public function user(){
        return $this->belongsTo(
            User::class,
            'fk_id_user',
            'id'
        );
    }

    public function client(){
        return $this->belongsTo(
            client::class,
            'fk_id_client',
            'id'
        );
    }

    public function product(){
        return $this->belongsTo(
            product::class,
            'fk_id_product',
            'id'
        );
    }

   public function  updats(){
        return $this->hasMany(
            update::class,
            'fk_id_work',
            'id'
        );
   }

    public function repairs(){
        return $this->belongsToMany(
            repairs::class,
            'updates',
            'fk_id_work',
            'fk_id_repair'
        )->withPivot('budget','description','created_at');
    }
}

<?php

namespace App\Http\Models;

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
 */
class work extends Model
{
    //
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    /**
 * Define the relationship between DetallePedido and Pedido models.
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function pedido()
{
    return $this->belongsTo(Pedido::class);
}

}

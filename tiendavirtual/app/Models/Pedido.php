<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    /**
 * Define the relationship between Pedido and DetallePedido models.
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function detallesPedido()
{
    return $this->hasMany(DetallePedido::class);
}
}

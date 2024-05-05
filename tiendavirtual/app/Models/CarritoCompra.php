<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarritoCompra extends Model
{
    use HasFactory;

    /**
 * Define the relationship between CarritoCompras and Usuario models.
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function usuario()
{
    return $this->belongsTo(Usuario::class);
}

}

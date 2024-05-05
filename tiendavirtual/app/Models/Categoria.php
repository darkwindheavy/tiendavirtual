<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    /**
 * Define the relationship between Categoria and Producto models.
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function productos()
{
    return $this->hasMany(Producto::class);
}
}

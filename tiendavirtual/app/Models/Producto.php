<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /**
 * Define the relationship between Producto and Categoria models.
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function categoria()
{
    return $this->belongsTo(Categoria::class);
}

}

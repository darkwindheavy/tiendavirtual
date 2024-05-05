<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorradoTemporalUsuario extends Model
{
    use HasFactory;

    /**
 * Define the relationship between BorradoTemporalUsuarios and Usuario models.
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function usuario()
{
    return $this->belongsTo(Usuario::class);
}

}

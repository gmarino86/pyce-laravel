<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductoTipo
 *
 * @property int $producto_tipo_id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductoTipo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductoTipo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductoTipo query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductoTipo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductoTipo whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductoTipo whereProductoTipoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductoTipo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductoTipo extends Model
{
    //use HasFactory;
    protected $table = 'tipo_producto';
    protected $primaryKey = 'producto_tipo_id';

}

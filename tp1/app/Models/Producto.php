<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Producto
 *
 * @property int $producto_id
 * @property string $nombre
 * @property string $descripcion
 * @property int $precio
 * @property int $producto_tipo_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Producto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto query()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereProductoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereProductoTipoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Producto extends Model
{
    protected $table = "productos";
    protected $primaryKey = "producto_id";

    protected $fillable = ['nombre','descripcion','precio','producto_tipo_id'];

    public static $rules = [
        'nombre'        => 'required|min:2',
        'precio'        => 'required|numeric',
        'descripcion'   => 'required'
    ];

    public static $rulesMessages = [
        'nombre.required'       => 'El nombre es requerido',
        'nombre.min'            => 'El nombre debe tener al menos 2 caracteres',
        'precio.required'       => 'El precio es requerido',
        'precio.numeric'        => 'El precio debe ser un número',
        'descripcion.required'  => 'La descripcion es requerida'
    ];

}

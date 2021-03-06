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
 * @property-read \App\Models\ProductoTipo $tipoProducto
 * @property string|null $imagen
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereImagen($value)
 */
class Producto extends Model
{
    protected $table = "productos";
    protected $primaryKey = "producto_id";

    protected $fillable = ['nombre','descripcion','precio','producto_tipo_id','imagen'];

    public static $rules = [
        'nombre'            => 'required|min:2',
        'precio'            => 'required|numeric',
        'descripcion'       => 'required',
        'producto_tipo_id'  => 'required|exists:tipo_producto'
    ];

    public static $rulesMessages = [
        'nombre.required'               => 'El nombre es requerido',
        'nombre.min'                    => 'El nombre debe tener al menos 2 caracteres',
        'precio.required'               => 'El precio es requerido',
        'precio.numeric'                => 'El precio debe ser un n??mero',
        'descripcion.required'          => 'La descripcion es requerida',
        'producto_tipo_id.required'     => 'Ingrese el tipo de producto',
        'producto_tipo_id.exists'       => 'El valor ingresado no existe',

    ];

    /**
     * RELACION TIPO PRODUCTO
     * Con el metodo referencio su uso
     */
    public function tipoProducto()
    {
        return $this->belongsTo(ProductoTipo::class, 'producto_tipo_id','producto_tipo_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    protected $table = "producto";
    protected $key = "id";

    protected $fillable = [
        'id',
        'cod_unique',
        'nombre_producto',
        'cantidad',
        'precio',
        'sucursal',
        'categoria',
        'descripcion'
    ];

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";

        $query->where(function ($query) use ($term) {
            $query->where('nombre_producto', 'like', $term)
            ->orWhere('cod_unique', 'like', $term)
            ->orWhere('sucursal', 'like', $term);
        });
    }

}

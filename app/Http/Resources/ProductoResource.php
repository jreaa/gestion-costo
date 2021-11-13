<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cod_unique' => $this->cod_unique,
            'nombre_producto' => $this->nombre_producto,
            'cantidad' => $this->cantidad,
            'precio' => $this->precio,
            'sucursal' => $this->sucursal,
            'categoria' => $this->categoria,
            'descripcion' => $this->description
        ];
    }
}

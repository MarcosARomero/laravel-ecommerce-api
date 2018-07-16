<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'descripcion' => $this->detail,
            'price' => $this->price,
            'stock' => $this->stock,
            'discount' => $this->discount
        ];
    }
}

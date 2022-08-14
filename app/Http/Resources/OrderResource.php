<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'mal' => $this->mal,
            'produit' => $this->produit,
            'quantite' => $this ->quantite,
            'complete' => $this ->completed,
            'numeroDeCommande'=> $this ->numeroDeCommande
        ];
    }
}

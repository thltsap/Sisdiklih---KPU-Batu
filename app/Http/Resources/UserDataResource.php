<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserDataResource extends JsonResource
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
            // 'limit' => $this->limit,
            'name' => $this->name,
            'address' => $this->address,
            'birthdate' => $this->birthdate,
            'phone' => $this->phone,
            'nik' => $this->nik,
            // 'price_from' => $this->price_from,
            // 'price_to' => $this->price_to,
        ];
    }
}

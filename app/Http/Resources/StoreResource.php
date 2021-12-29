<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "address" => $this->address,
            "city" => $this->city,
            "contact_name" => $this->contact_name,
            "contact_email" => $this->contact_email,
            "storeCategory" => $this->storeCategory,
            "items" => $this->items,
        ];
    }
}

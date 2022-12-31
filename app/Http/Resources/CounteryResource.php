<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CounteryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'countery_name'=>$this->countery_name,
            'countery_nameAr'=>$this->countery_nameAr,
            'vat_rate'=>$this->vat_rate,
             'active'=>$this->active,
            'user_id'=>$this->user_id
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PhoneResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'mobile'=>$this->mobile,
            'deleted_at'=>$this->deleted_at,
        ];
    }
}

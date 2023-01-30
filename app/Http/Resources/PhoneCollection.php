<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PhoneCollection extends Resource
{

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return[
            'id'=>$this->id,
            'mobile'=>$this->mobile,
            'foreign_key'=>$this->st_id,
            'deleted_at'=>$this->deleted_at,
                
            // ],
        ];
    }
}

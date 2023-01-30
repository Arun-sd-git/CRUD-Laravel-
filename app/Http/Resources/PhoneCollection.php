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
        // $del = array();
        // for($i=0;$i<sizeof($this->collection);$i++){
        //     array_push($del,'id:'.$this[$i]->id);
        //     array_push($del,'mobile:'.$this[$i]->mobile);
        //     array_push($del,'foreign_key:'.$this[$i]->st_id);
        //     array_push($del,'delete at :'.$this[$i]->deleted_at);
        // }

        return[
            'id'=>$this->id,
            'mobile'=>$this->mobile,
            'foreign_key'=>$this->st_id,
            'deleted_at'=>$this->deleted_at,
                
            // ],
        ];
    }
}

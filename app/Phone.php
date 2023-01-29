<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Phone extends Model
{
    use SoftDeletes;

    protected $table = "phones";
    protected $dates = ['deleted_at'];

    public function student()
    {
        return $this->belongsTo('App\Student','st_id');
    }
}

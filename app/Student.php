<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    protected $table = "students";

    protected $fillable = ['name','address','email','links','notes','company'];

    //Primary Key
    public $primaryKey = 'id';

    public function phones()
    {
        return $this->hasMany('App\Phone', 'st_id');
    }
}

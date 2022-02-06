<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryapi extends Model
{

    protected $fillable = [
        'name',
        'url',
    ];

    public function textwebservices(){
        return $this->hasMany(Textwebservice::class , 'categoryapi_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    protected  $table = 'specializations';

    public function doctor(){
        return $this->hasMany(Doctor::class , 'id');
    }


}

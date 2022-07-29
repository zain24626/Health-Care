<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;

class Doctor extends Model
{
    use HasFactory;

    protected  $table = 'Doctors';
    public function user()
    {
        return $this->belongsTo(User::class , 'userid');
    }
    public function specialization()
    {
        return $this->belongsTo(Specialization::class , 'specialization');
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;

    //relacion uno a muchos
    public function lesson()
    {
        return $this->hasMany('App\Models\Lesson');
    }
}

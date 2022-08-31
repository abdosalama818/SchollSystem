<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['Name_Class'];



    public $timestamps = true;
    protected $fillable=['Name_Class','Grade_id'];


// class room belo

public function Grades()
{
    return $this->belongsTo('App\Models\Grade', 'Grade_id');
}
}

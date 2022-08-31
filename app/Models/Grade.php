<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Grade extends Model
{
    use HasFactory,HasTranslations;

   // use HasTranslations;

    public $translatable = ['Name'];

    protected $fillable=['Name','Notes'];

    public $timestamps = true;


    //grade hasmeny calssrooms

    public function classrooms(){
        return $this->hasMany(Classroom::class);
    }


}

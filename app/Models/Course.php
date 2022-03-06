<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'courses';
    protected $fillable = ['name','title','min_description','description','details','status'];

    public $translatable = ['name','title','min_description','description','details'];
}

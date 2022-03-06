<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory;

    use HasTranslations;

    protected $table = 'sliders';

    protected $fillable = ['title','min_title','description','image','status','order'];

    public $translatable = ['title','min_title','description'];
}

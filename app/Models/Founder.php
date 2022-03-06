<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Founder extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $table = 'founders';

    protected $fillable = ['name','min_description','description','facebook','twitter','instagram','status','image','linkedin'];

    public $translatable = ['name','min_description','description'];


}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Page extends Model
{
    use HasFactory;

    use HasTranslations;

    protected $table = 'pages';

    public $translatable  = ['name','description'];

    protected $fillable = ['name','description','keywords','order','status','url'];

}

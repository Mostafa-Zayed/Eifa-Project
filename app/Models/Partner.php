<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Partner extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $table = 'partners';

    protected $fillable = ['name','description','link','image','facebook','linkedin','status'];

    public $translatable = ['name','description'];

}

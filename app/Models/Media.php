<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Media extends Model
{
    use HasFactory;

    use HasTranslations;
    protected $table = 'media';
    protected $fillable = ['name','description','location','date','image','status'];

    public $translatable = ['name','description','location'];
}

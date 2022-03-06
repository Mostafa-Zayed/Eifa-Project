<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'services';

    public $translatable = ['title','content'];
    protected $fillable = ['title','content','status'];

    public function serviceList(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ServiceList::class,'service_id','id');
    }
}

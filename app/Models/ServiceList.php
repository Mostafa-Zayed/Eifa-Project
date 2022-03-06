<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceList extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table ='service_lists';
    protected $fillable = ['content','status','service_id'];

    public $translatable = ['content'];


    public function service(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Service::class,'service_id','id');
    }
}

<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Attribute;
use Spatie\Translatable\HasTranslations;

class Media extends Model
{
    use HasFactory;

    use HasTranslations;
    protected $table = 'media';
    protected $fillable = ['name','description','location','date','image','status','category_id'];

    public $translatable = ['name','description','location'];

    protected function getDateAttribute($value)
    {
        $date = Carbon::createFromFormat('m/d/Y', $value);

        $date = __('months.'.$date->format('F')) . " ".$date->format('Y');

        return $date;
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function formateDate()
    {

    }
}

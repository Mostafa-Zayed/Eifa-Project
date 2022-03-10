<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'articles';

    protected $fillable = ['title','description','image','author','date','status','category_id'];

    public $translatable = ['title','description','author'];


    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    protected function getDateAttribute($value)
    {
        $date = Carbon::createFromFormat('m/d/Y', $value);
        $date = $date->format('d').' '.strtoupper(__('months.'.$date->format('F'))).' '.$date->format('Y');
        return $date;
    }
}

<?php

namespace App\AdminModel;

use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Brandarticle extends Model
{
    protected $guarded = ['imagepic','xiongzhang','updatetime','image','indexlitpic','input-image'];

    /**
     * 全局scope定义
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new PublishedScope);
    }

    public function getIndexpicAttribute($indexpic)
    {
        return $indexpic?$indexpic:$this->litpic;
    }
    /**栏目关联定义
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function arctype()
    {
        return $this->belongsTo('App\AdminModel\Arctype','typeid');
    }
}

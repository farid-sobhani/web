<?php


namespace Farid\Category\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function parentCategory()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function subCategories()
    {
       return $this->hasMany(Category::class,'parent_id');
    }
}

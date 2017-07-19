<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model  {
    protected $fillable=['name','parent_id'];
    
    public function sub_category() {
        return $this->hasOne('App\Sub_categories','category_id');
    }
    public function sub_categorys() {
        return $this->hasMany('App\Sub_categories','category_id');
    }
}

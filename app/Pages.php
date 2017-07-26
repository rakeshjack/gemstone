<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model {

    protected $fillable = ['sub_category_id', 'title', 'content'];

    public function gallery_post() {
     return $this->hasMany('App\Gallery','model_id');
    }
    
    public function sub_category_one() {
        return $this->belongsTo('App\Sub_categories','sub_category_id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {
    protected $fillable=['model_id','model_name','image','image_type'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model {
    protected $fillable=['sub_category_id','title','content'];
}

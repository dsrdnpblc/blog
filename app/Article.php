<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    protected $table = ['title','content','category_id','user_id'];
}

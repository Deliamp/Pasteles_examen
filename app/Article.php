<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //use SofDeletes;
    //protected $fillable = ['titulo','cuerpo','autor'];
    protected $table = "articles";
}

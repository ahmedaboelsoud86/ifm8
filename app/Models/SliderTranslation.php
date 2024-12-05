<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','top_header','buttom_header','goto'];

}//end of model

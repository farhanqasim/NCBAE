<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyPost extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function postName(){
        return $this->hasOne('App\Models\Post','id','post_id');
     }
}

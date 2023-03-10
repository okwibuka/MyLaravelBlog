<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timeStamps = true;
    
    public function posts(){
        return $this->belongsTo('App\Models\Post');
    }
}

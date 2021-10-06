<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model {

    public $fillable = ['name', 'email', 'phone', 'subject', 'message'];
    
}
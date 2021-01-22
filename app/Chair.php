<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    protected $fillable = [
        'name', 'id_manager'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
//use View;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = [
        'id', 'nome', 'email'
    ];
}

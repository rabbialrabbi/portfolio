<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    public $guarded = [];

    protected $fillable = [
        'name', 'email', 'message',
    ];
}

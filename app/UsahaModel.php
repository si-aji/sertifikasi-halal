<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsahaModel extends Model
{
    protected $table = 'usaha';
    protected $guarded = [
        'id'
    ];

    public $timestamps = true;
}

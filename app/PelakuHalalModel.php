<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelakuHalalModel extends Model
{
    protected $table = 'pelaku_halal';
    protected $guarded = [
        'id'
    ];

    public $timestamps = true;
}

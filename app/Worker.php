<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{

    protected $table = 'workers';

    protected $guarded = [];

    public function position()
    {
        return $this->belongsTo('App\Position', 'position_id');
    }
}
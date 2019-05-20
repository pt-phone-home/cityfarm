<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{

    public function getMonthNumberAttribute()
    {
        return $this->attributes['month_number'] = '';
    }

    protected $appends = ['month_number'];

}

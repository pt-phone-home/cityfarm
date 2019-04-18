<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $filleable = ['title', 'start_date', 'end_date', 'description'];
}

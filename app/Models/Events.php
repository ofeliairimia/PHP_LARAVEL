<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'name', 'description', 'location', 'event_date', 'event_time', 'speaker', 'partner'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners'; // Replace 'partners' with your actual table name

    protected $fillable = [
        'name',"description"
        // Add other fillable fields as needed
    ];
}

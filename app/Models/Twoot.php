<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Twoot extends Model
{
    use HasFactory;

    protected $fillable = [
        'twoot_body',
        'user_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Twoots_Tags extends Pivot
{
    protected $table = "twoots_tags";
}

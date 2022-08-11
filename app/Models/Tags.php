<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = [
      'tag',
    ];

    /**
     * Each tag can have many twoots.
     *
     */
    public function twoots()
    {
        return $this->belongsToMany(
            Twoot::class,
            'twoots_tags',
            'tag_id',
            'twoot_id',
            'id',
            'id'
        )->withTimestamps();
    }
}

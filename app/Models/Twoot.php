<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Twoot extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'twoot_body',
        'user_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * Each twoot can have many tags.
     *
     */
    public function tags()
    {
        return $this->belongsToMany(
            Twoots_Tags::class,
            'twoots_tags',
            'twoot_id',
            'tag_id',
            'id',
            'id',
        )->withTimeStamps();
    }
}

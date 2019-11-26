<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    /**
     * Every profile belongs to one user
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

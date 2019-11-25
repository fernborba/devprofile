<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'title'
    ];


    /**
     * Every profile belongs to one user
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

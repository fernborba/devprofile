<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * After the user creation, give him/her a profile
     *
     *
     */
    protected static function boot()
    {
        parent::boot();

        //This event (create() gets fired whenever a user is created.
        static::created(
            function ($user)
            {
                $user->profile()->create([
                    'title' => 'your title'
                ]);


                //We will send an email to the new user
                //Mail::to($user->email)->send(new NewUserWelcomeEmail());

            }


        );
    }

    /**
     * Every user has a profile associated
     *
     *
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}

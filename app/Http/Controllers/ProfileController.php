<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use phpDocumentor\Reflection\Types\Array_;

class ProfileController extends Controller
{

    /**
     * Show the user profile.
     *
     * @return \Illuminate\View\View
     */
    public function index(User $user)
    {
        //dd($user->profile());
        return view('profile.index',compact('user'));
    }

    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    //public function update(ProfileRequest $request)
    public function update(User $user)
    {
        //$this->authorize('update', $user->profile);
        //dd(request()->all());
        $data = request()->validate([
            'name' => 'required',
            'email' =>  ['email', 'required'],
            'title' => 'required',
            'about' => '',
            'place' => '',
            'linkfacebook' => ['url', 'nullable'],
            'linktwitter' => ['url', 'nullable'],
            'linklinkedin' => ['url', 'nullable'],
        ]);
        //dd($data);
        //Mount array with User data
        $user_data = array();
        $user_data = array_merge($user_data, array('name' => $data['name']));
        $user_data = array_merge($user_data, array('email' => $data['email']));

        //Remove 2 first elements (name and email)
        array_shift($data);
        array_shift($data);



        //Update User
        $result = auth()->user()->update($user_data);

        //Update Profile
        $result = auth()->user()->profile->update($data);


        return redirect("/profile/{$user->id}")->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}

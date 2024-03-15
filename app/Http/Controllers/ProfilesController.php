<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {        
        $user = User::findOrFail($user);

        return view('profiles.index', [
            'user' => $user,
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'caption'=>'required',
            'image'=>['required','image'],
        ]);

        \App\Models\Post::create($data);

        dd(request()->all());
    }

}

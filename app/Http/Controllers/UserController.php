<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editUser()
    {
        $user = Auth::user();

        return view('edit_user', ['user' => $user]);
    }

    public function updateUser(Request $request)
    {

        //todo fix it
        $request->validate([
            'name' => 'required|max:255|string',
            'first_name' => 'required|max:255|alpha',
            'last_name' => 'required|max:255|alpha',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $data = $request->all();
        $user = User::findOrFail(Auth::user()->id);
//        dump($data);
        if ($request->hasFile('image'))
        {
            $path = $request->file('image')->store('public/avatars');
            $user->image_url = Storage::url($path);
            $user->save();
        }

        $user->update([
            'name' => $data['name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'country_id' => $data['country']
        ]);

//        return redirect()->back();

//        $request->file('image')->storeAs('public/avatars', 'default.jpeg');
    }
}

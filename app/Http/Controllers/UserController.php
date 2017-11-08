<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Rules\ResetPassword;
use Carbon\Carbon;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('checkUsername');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editUser()
    {
        $user = Auth::user();

        return view('edit_profile', ['user' => $user]);
    }

    public function showProfile()
    {
        return view('show_profile', ['user' => Auth::user()]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateUser(Request $request)
    {
        dump($request);

        //todo update after ui
        $request->validate([
            'email' => 'required|max:255|string|email',
            'first_name' => 'required|max:255|alpha',
            'last_name' => 'required|max:255|alpha',
            'date_of_birth' => 'required|date|before:'.Carbon::now(),
//            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $user = User::findOrFail(Auth::user()->id);
        if ($request->input('password') && $request->input('new_password'))
        {
            $request->validate([
                'password' => new ResetPassword($request->input('password'), $user->password)
            ]);
        }
        $data = $request->all();
//        if ($request->hasFile('image'))
//        {
//            $path = $request->file('image')->store('public/avatars');
//            $user->image_url = Storage::url($path);
//            $user->save();
//        }

        $user->update([
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender']
        ]);
        if ($data['new_password'])
        {
            $user->password = bcrypt($data['new_password']);
            $user->save();
        }

        $request->session()->flash('success', 'You have successfully updated your profile');

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function checkUsername(Request $request)
    {
        $name = $request->get('name');
        $user = User::whereName($name)->get();

        if($user->count())
        {
            return new JsonResponse(['message' => 'This username is already taken, try another'], 449);
        }

        return new JsonResponse(['message' => 'Ok'], 200);
    }
}

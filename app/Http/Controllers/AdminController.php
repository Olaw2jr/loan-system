<?php

namespace App\Http\Controllers;

use App\User;
// use App\Signed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ? Hell not sure why iko hapa.
        // TODO: Get a list of all the users.
        $users = User::with('signed')->get();

        // dd($users->signed->signed);

        return view('admin', compact('users'));
    }

    /**
     * Delete some user data
     *
     * ? i just do not know what thing returns so forgive me...
     */
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        // dd($user->name);

        return Redirect::route('admin.dashboard')->with('status', '' . $user->name . ' deleted successfully');
    }
}

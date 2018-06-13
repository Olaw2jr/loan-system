<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Signed;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'reg_no' => 'required|string',
            'course_name' => 'required|string',
            'name' => 'required|string|max:255',
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'email' => 'required|string|email|max:255|unique:users',
            'bank_name' => 'required|string',
            'account_no' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return App\User
     */
    protected function create(array $data)
    {

        $request = request();

        $profileImage = $request->file('avatar');
        $profileImageSaveAsName = time() . Auth::id() . "-avatar." . $profileImage->getClientOriginalExtension();

        $upload_path = 'uploads/avatars/';
        $path = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);

        // dd($success);

        $user = User::create([
            'reg_no' => $data['reg_no'],
            'course_name' => $data['course_name'],
            'name' => $data['name'],
            'avatar' => $path,
            'email' => $data['email'],
            'bank_name' => $data['bank_name'],
            'account_no' => $data['account_no'],
            'password' => Hash::make($data['password']),
        ]);

        $signed = Signed::create([
            'user_id' => $user->id,
        ]);

        return $user;

    }
}

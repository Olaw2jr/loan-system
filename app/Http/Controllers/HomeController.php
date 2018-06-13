<?php

namespace App\Http\Controllers;

use Auth;
use App\Signed;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Start point of our date range.
        $start = strtotime("10 September 2017");

        //End point of our date range.
        $end = strtotime("29 Dec 2017");

        //Custom range.
        $timestamp = mt_rand($start, $end);

        //Print it out.
        // dd(date("Y-m-d", $timestamp));
        $date = date("Y-m-d", $timestamp);

        // $user = Auth::user();
        $users = Auth::user()->signed;

        // dd(Auth::user()->signed);

        return view('home', compact('users', 'date'));
    }

    public function sign(Request $request)
    {

        Signed::where('user_id', Auth::user()->id)
            ->update([
                'user_id' => Auth::user()->id,
                'signed' => true,
            ]);

        return back();
    }
}

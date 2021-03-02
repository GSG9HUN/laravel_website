<?php

namespace App\Http\Controllers;

use App\UserDetails;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $details = UserDetails::all();
        return view('profile')->with("details",$details);
    }


}

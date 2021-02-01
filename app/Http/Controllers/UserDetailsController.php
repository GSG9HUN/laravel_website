<?php

namespace App\Http\Controllers;

use App\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDetailsController extends Controller
{


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update(Request $request,int $id)
    {

        DB::table('users')->where('id',$id)->update([
           'email'=>$request['email']
        ]);
        DB::table('user_details')->where('id',$id)->update([
            'email'=>$request['email'],
            'FirstName'=>$request['First_name'],
            'LastName'=>$request['Last_name'],
            'Country'=>$request['Country'],
            'City'=>$request['City'],
            'Address'=>$request['Address'],
            'Phone'=>$request['Phone'],
        ]);
        $details = UserDetails::all();
        return view('profile')->with('details',$details);
    }


}

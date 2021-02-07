<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class UserDetailsController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,int $id)
    {
        try{
                User::query()->where('id',$id)->update([
                    'email'=>$request['email']
                ]);

                UserDetails::query()->where('id',$id)->update([
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
        }catch (Exception $e){
            return redirect()->back()->with('email','email is already used');
    }

    }


}

<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetails;
use Illuminate\Database\QueryException;
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
            $email = User::query()->select('email')->where('id',$id)->get();
            if(strcmp ( $email[0]['email'],$request['email'] )==0){
                UserDetails::query()->where('id',$id)->update([
                    'email'=>$request['email'],
                    'FirstName'=>$request['First_name'],
                    'LastName'=>$request['Last_name'],
                    'Country'=>$request['Country'],
                    'City'=>$request['City'],
                    'Address'=>$request['Address'],
                    'Phone'=>$request['Phone'],
                ]);

            }else{
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
            }





            $details = UserDetails::all();
            return view('profile')->with('details',$details);
        }catch (QueryException $e){

            return redirect()->back()->with('email','Email field cannot be empty!');
        }catch(Exception $e){
            return redirect()->back()->with('email','Email already used by other user!');
        }

    }


}

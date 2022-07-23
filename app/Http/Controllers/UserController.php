<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup()
    {
        return view("signup");
    }

    public function register(Request $request)
    {


         $request->validate([
            'fullname' => 'required',
            'email'    => 'required | unique:users',
            'password' => 'required | min:8',
            'picture'  => 'required | mimes:jpg,PNG,png'
         ]);

         $file = $request->file('picture');

        $name = $file->getClientOriginalName();   
        
        if($file)
        {
            $request->picture->storeAs("images", $name);
        }

        $fullname = $request->fullname;
        $email    = $request->email;
        $password = $request->password;

       $user = User::create([

            'fullname' => $fullname,
            'email' => $email,
            'password' => bcrypt($password),
            'picture' => $name
        ]);

    
    }

    public function addphone()
    {
        $users = User::all();
        $phones = Phone::with('user')->get();

        return response()->json($phones);


        return view('addphone',compact('users','phones'));
    }

    public function addcontact()
    {
        $user_id = request()->user_id;
        $phone = request()->phone;

    

        $createContact =  Phone::create(['user_id'=>$user_id, 'phone_number'=>$phone]);

        if($createContact)
        {
            return  "Contact is Added";
        }
    }
}

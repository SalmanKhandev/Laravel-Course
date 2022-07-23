<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contacts()
    {
        
     $contacts = Contact::all();

    //  $contacts = DB::table('contacts')->get();
 
    //  $contact = Contact::where('email','ali@gmail.com')->first();
 
    }

    public function getContactByEmail($email)
    {
        // $contact = Contact::where('email',$email)->first();

        // $contact = DB::table('contacts')
        // ->select('name','email')
        // ->where('email',$email)->first();

        // $contact = DB::insert('insert into contacts(name,email,phone) values(?,?,?)',
        // ['salmakhan','salmankhan@gmail.com','03127070447']);



        // if(!$contact)
        // {
        //     return response()->json('No contact is associated with provided email');
        // }

        dd("Data inserted in database");

    }

    public function deletecontact($id)
    {
        $deletecontact = Contact::where('id', $id)->first();

        if(!$deletecontact)
        {
            return response()->json('No contact is associated with provided id');
        }

        $deletecontact->delete();
    }

    public function updatecontact($id)
    {
        $updatecontact = Contact::where('id', $id)->first();

        if(!$updatecontact)
        {
            return response()->json('No contact is associated with provided id');
        }

        $updatecontact->name= "updated name";
        $updatecontact->email= "updated email";
        $updatecontact->phone= "updated phone";
        $success =   $updatecontact->save();

        if($success)
        {
             return response()->json('Record updated successfully');
        }
        
    }
}

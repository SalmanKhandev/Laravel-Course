<?php

namespace App\Http\Controllers;
use App\Models\Task;

use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){

          // $tasks = Task::all();

          // return view("home", compact('tasks'));

         return view('file');
    }

    public function store(){

         $store = new Task();
         $store->name = 'testing name';
         $store->description = 'testing description';
         $store->save();
         
        //  Task::create([
        //      'name'=>'task one',
        //      'description'=>'this is description for task one',
        //   ]);

          if($store)
          {
             return "Task is inserted successfully";
          }

    }

    public function singletask($id)
    {


        $singleRecord = Task::find($id);

        return response()->json($singleRecord);
    }


    public function register()
    {
        return view("form");
    }

    public function signup(Request $request)
    {
    


        $user = new User();

        $user->name = $request->name;

        $user->email = $request->email;

        $user->phone = $request->phone;

        $user->password = bcrypt($request->password);

        $success = $user->save();

        if($success)
        {
             return "user saved successfully";
        }

        return "there is some problem";


         
    }
}

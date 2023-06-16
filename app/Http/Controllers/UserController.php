<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        
        return view('/user',[
            'title' => 'user',
            'users' => user::all(),     
        ]);    
    }

    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('/user');
        
    }

    public function edituser($id)
    {
        $user=DB::table('users')->where('id',$id)->get();
        return view('edituser',['user' => $user]);
    }
    
    public function update(Request $request )
    {
        DB::table('users')->where('id',$request->id)->update([
            'id'=> $request->id,
            'name' => $request->user,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'status' => $request->status,
            'password' => $request->password
        ]);

        return redirect('/user');
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'status' => 'required|max:255',
            'password' => 'required|max:255',
        ]);


        user::create($validatedData);
    
        return redirect('/user');
    }
}
 
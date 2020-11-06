<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){
        $users = User::latest()->get();
        return view('admin.index',['users'=> $users]);
    }

    public function destroy($id){
        $adds = User::FindorFail($id);
        $adds->delete();
        return redirect('/admin')->with('msgAdminDeleted','User deleted');
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        $user = new User;
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nickname' => ['required', 'string', 'max:255', 'unique:users'],
            'mobile' => ['required', 'string', 'max:15', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);

        $user->name =$request['name'];
        $user->email =$request['email'];
        $user->nickname =$request['nickname'];
        $user->mobile =$request['mobile'];
        $user->mobile = $request['mobile'];

        if($validate){
            $user->name =$request['name'];
            $user->email =$request['email'];
            $user->nickname =$request['nickname'];
            $user->mobile =$request['mobile'];
            $user->password=Hash::make($request['password']);

            $user->save();
            return redirect('/admin')->with('msgAdminCreated','User Created');
        }
    }
}

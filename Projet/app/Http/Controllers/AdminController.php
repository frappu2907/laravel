<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


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

        if($validate){
            $user->name =$request['name'];
            $user->email =$request['email'];
            $user->nickname =$request['nickname'];
            $user->mobile =$request['mobile'];
            $user->password=Hash::make($request['password']);
            if(!isset($request['isadmin'])){
                $user->is_admin =0;
            }else{
                $user->is_admin=$request['isadmin'];
            }



            $user->save();
            return redirect('/admin')->with('msgAdminCreated','User Created');
        }
    }

    public function edit($id){
        if(Auth::user()->id == $id){
            return redirect()->back()->with('warning',"Not allowed to edit this user");
        }else{
            $user =User::findOrFail($id);
            return view('admin.edit', ['user' => $user ]);
        }
    }

    public function update(Request $request){
        $id =request('id');
        $user=User::find($id);

            if($user->email === $request['email']){
            //validate input//
            $validate = $request->validate([
                'name' => 'required |min:2',
                'nickname' =>'required|min:3',
                'mobile' =>'required|min:8',
                'email' =>'required|email',
            ]);

            }else{
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'nickname' =>'required|min:3',
                    'mobile' =>'required|min:8',
                    'email' =>'required|unique:users',
                ]);
            }

            $user->name =$request['name'];
            $user->nickname =$request['nickname'];
            $user->mobile =$request['mobile'];
            $user->email =$request['email'];
            if(!isset($request['isadmin'])){
                $user->is_admin =0;
            }else{
                $user->is_admin=$request['isadmin'];
            }


            $user->save();
            return redirect()->back()->with('msgAdminUpdated','Profile updated');
    }

       public function updatePassword(Request $request){
        $id =request('id');
        $user =User::find($id);

        $validate = $request->validate([
            'password' => 'required|min:7|confirmed',
        ]);

        if($validate){
            $user->password=Hash::make($request['password']);
            $user->save();
            return redirect()->back()->with('msgAdminPasswordUpdated','Password updated');  
        }
    }
}

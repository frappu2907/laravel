<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeurController extends Controller
{
   public function edit ($id){
        $infos =User::findOrFail($id);
        return view('employeurProfile.edit', ['infos' => $infos ]);
    }

   public function destroy($id){
        $infos =User::findOrFail($id);
        $infos->delete();
        return redirect('/');
    }

   public function update(Request $request){
        $id =request('id');
        $user=User::find($id);

            if($user->email === $request['email']){
            //validate input//
            $validate = $request->validate([
                'name' => 'required |min:2',
                'nickname' =>'required|min:3',
                'mobile' =>'required|min:10',
                'email' =>'required|email',
            ]);

            }else{
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'nickname' =>'required|min:3',
                    'mobile' =>'required|min:10',
                    'email' =>'required|unique:users',
                ]);
            }

            $user->name =$request['name'];
            $user->nickname =$request['nickname'];
            $user->mobile =$request['mobile'];
            $user->email =$request['email'];

            $user->save();
            return redirect()->back()->with('msgProfileUpdated','Profile updated');
    }

   public function updatePassword(Request $request){
        $id =request('id');
        $user =User::find($id);

        $validate = $request->validate([
            'password' => 'required|min:7|required_with:password_confirmation',
        ]);

        if($validate){
            $user->password=Hash::make($request['password']);
            $user->save();
            return redirect()->back()->with('msgPasswordUpdated','Password updated');  
        }
    }
}

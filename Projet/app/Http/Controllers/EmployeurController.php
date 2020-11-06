<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployeurController extends Controller
{
    function edit ($id){
        $infos =User::findOrFail($id);
        return view('employeurProfile.edit', ['infos' => $infos ]);
    }

    function destroy($id){
        $infos =User::findOrFail($id);
        $infos->delete();
        return redirect('/');
    }

    function update(){
        $infos=User::findOrFail('id');
    }
}

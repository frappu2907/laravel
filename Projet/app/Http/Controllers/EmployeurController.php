<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployeurController extends Controller
{
    function show ($id){
        $infos =User::findOrFail($id);
        return view('employeurProfile.show', ['infos' => $infos ]);
    }

    function destroy($id){
        $infos =User::findOrFail($id);
        $infos->delete();
        return redirect('/');
    }
}

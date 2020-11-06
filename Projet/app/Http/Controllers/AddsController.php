<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adds;
use Illuminate\Support\Facades\Auth;

class AddsController extends Controller
{
    function store(){
        $add = new Adds;
        $add->title = request('title');
        $add->compagny_name = request('compagny_name');
        $add->description = request('description');
        $add->location = request('location');
        $add->experience = request('experience');
        $add->email = request('email');
        $add->save();
        return redirect('/user/adds')->with('msgCreated','New add created');

    }

    function create(){
        return view('adds.create');
    }

    function index(){
        $adds = Adds::latest()->get();
        return view('adds.index',['adds' =>$adds]);
    }

    function show ($id){
        $add =Adds::findOrFail($id);
        return view('adds.show', ['add' => $add ]);
    }

    function destroy($id){
        $adds = Adds::FindorFail($id);
        $adds->delete();
        return redirect('/user/adds')->with('msgDeleted','Add deleted');
    }
    function edit($id){
        $add = Adds::FindorFail($id);

        return view('adds.edit',['add'=>$add]);
    }

    function update(){
        $add = Adds::FindorFail(request('id'));
        $add->title = request('UpdateTitle');
        $add->compagny_name = request('UpdateCompagny_name');
        $add->description = request('UpdateDescription');
        $add->location = request('UpdateLocation');
        $add->experience = request('UpdateExperience');
        $add->email = request('UpdateEmail');
        $add->save();
        return redirect('/user/adds')->with('msgUpdated','Add updated');
    }
}

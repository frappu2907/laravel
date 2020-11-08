<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class viewController extends Controller
{
    
  
    public function index()
    {

        $ads = DB::table('adds')->orderby('created_at' , 'DESC')->paginate(30);
        return view('welcome' , ['ads'=>$ads] ,compact('ads'));
    }
   function search(Request $request)
   {
        $search = $request->get('search');
        $ads = DB::table('adds')->where('title','like', '%'.$search.'%')
        ->orWhere('description','like', '%'.$search.'%')
        ->orWhere('compagny_name','like', '%'.$search.'%')
        ->orWhere('location','like', '%'.$search.'%')
        ->orWhere('experience','like', '%'.$search.'%')
        ->orWhere('email','like', '%'.$search.'%')
        ->orderby('created_at', 'DESC')
        ->paginate(5);
       
        return view('welcome', ['ads'=> $ads]);

    }   
   
}


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //function index()
    //{

    //    $ads = DB::table('ads')->orderby('create_at' , 'DESC')->paginate(5);
    //    return view('ads' , compact('add'));

    //function create()
    //{
    //return view('create');
    //}




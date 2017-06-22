<?php

namespace EloquentORM\Http\Controllers;

use Illuminate\Http\Request;

use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

use EloquentORM\User;

class QueryController extends Controller
{
    public function eloquentAll()
    {
        $users = User::all();
        
        $title = "Todos los usuarios (all)";
        
        return view('query.methods', compact('title','users'));
        
    }
    
    public function eloquentGet($gender)
    {
    $users = User::where('gender', $gender)
                ->get();
        
        $title = "Lista de usuarios (get)";
        
        return view('query.methods', compact('title','users'));
        
    }
}

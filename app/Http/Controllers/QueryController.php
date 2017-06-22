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
    
    public function eloquentGetCustom()
    {
    $users = User::where('gender', 'f')
                ->get(['id', 'name', 'biography']);
        
        $title = "Lista de usuarios (get-custom con Array)";
        
        return view('query.methods', compact('title','users'));
        
    }
    
    public function eloquentDelete($id)
    {
        $user= User::find($id);
        
        $user->delete();
        
        return view('pages.delete');
        
    }
    
    public function eloquentLists()
    {
        $users= User::orderBy('name', 'ASC')
                ->lists('name', 'id');
        
        return view('query.lists', compact('users'));
        
    }
}

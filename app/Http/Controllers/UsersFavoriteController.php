<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Micropost;

class UsersFavoriteController extends Controller
{
    public function store(Request $request, $id)
    {   
        \Auth::user()->favorite($id);
        return redirect()->back();
    
        
    }

    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return redirect()->back();
    }
    

}

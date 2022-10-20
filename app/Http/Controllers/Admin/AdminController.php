<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Models\Interest;

class AdminController extends Controller
{
    public function index()
    {
        // data ophalen uit de db
        $interests = Interest::all();
//       return Interest::all();

        return view('interests.index', compact('interests'));

    }

    public function create()
    {
        if (Auth::user()->admin) {
            return view('interests.create');
        } else {
            abort(403);
        }

    }



    public function store(Request $request)
    {

        $request->validate([
            'interest' => 'required|in:Force users,History,Empire',
            'title' => 'required|min:5|max:300',
            'description' => 'required',
//            'date' => 'required|date',
        ]);


        Interest::create($request->all());
        return(view('interests.index'));



    }


}



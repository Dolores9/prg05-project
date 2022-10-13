<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Models\Interest;

class InterestController extends Controller
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
        return view('interests.create');

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



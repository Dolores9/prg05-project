<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::user()->admin) {
            return view('interests.create');
        } else {
            abort(403);
        }

    }



    public function store(Request $request)
    {

            $validated = $request->validate([
            'interest' => 'required|in:Force users,History,Empire',
            'title' => 'required|min:5|max:300',
            'description' => 'required',
//            'date' => 'required|date',
            ]);

            $user_id = ['user_id'=> Auth::user()->id ];

            $interest_fields = array_merge($validated, $user_id);


            Interest::create($interest_fields);
            return redirect()->route('interests.index');



    }

    public function delete($id){

        $interest =Interest::where('id',$id)->first();

        if ($interest != null) {
            $interest->delete();
            return redirect()->route('interests.index')->with(['message'=> 'Successfully deleted!!']);
        }



    }

    public function search(Request $request){

        $search_text =$request->query('search');
        $interests = Interest::where('interest','like','%'. $search_text. '%')->get();




        return view('interests.index', compact('interests'));
    }
}






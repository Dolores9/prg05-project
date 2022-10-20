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

            $request->validate([
            'interest' => 'required|in:Force users,History,Empire',
            'title' => 'required|min:5|max:300',
            'description' => 'required',
//            'date' => 'required|date',
            ]);


            Interest::create($request->all());
            return redirect()->route('interests.index');



    }

    public function delete($id){

        $interest =Interest::where('id',$id)->first();

        if ($interest != null) {
            $interest->delete();
            return redirect()->route('interests.index')->with(['message'=> 'Successfully deleted!!']);
        }



//        $interest = interest::find($id);
//        $interest->delete();
//        return redirect()->route('interests.index')->with(['message'=> 'Successfully deleted!!']);
    }
}






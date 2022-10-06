<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Models\Interest;

class InterestController extends Controller
{
   public function show()
   {
       // data ophalen uit de db
       $interests=Interest::all();
//       return Interest::all();

       return view('posts',compact('interests'));

   }
}
//'posts',['interest'=>$data]

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index() {
        // data ophalen uit de db
        return DB::select('select * from interests');
        // informatie uit een formulier ophalen

        // return een view

        return view('posts');

    }
}

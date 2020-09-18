<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorksController extends Controller
{
    public function index(){

        $proj = DB::table('projects')->get();
        return view('works', compact('proj'));
    }
}
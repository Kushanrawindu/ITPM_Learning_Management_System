<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\library;

class DownloadController extends Controller
{
    public function downFunc(){

        //$downloads = DB::table('onlinelibraries')->get();
        $downloads = library::all();
        return view('downloadBook.viewFile')->with('downloads', $downloads);

    }
}

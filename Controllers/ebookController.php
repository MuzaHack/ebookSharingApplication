<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function index() {

        return view('subview/master');
    }


}

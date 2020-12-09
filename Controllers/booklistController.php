<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booklistController extends Controller
{
    public function index() {
        $title1 = 'IT';
        $title2 = 'The Art of War';
        $title3 = 'No Longer Human';
        $isbn1 = '0670813028';
        $isbn2 = '0195014766';
        $isbn3 = '0811204812';
        $genre1 = 'Horror';
        $genre2 = 'Fiction';
        $genre3 = 'Literature';
        $genre4 = 'Philosophy';
        $page1 = '1,138';
        $page2 = '216';
        $page3 = '177';



        return view('subview/list', compact('title1','title2','title3','isbn1','isbn2','isbn3',
        'genre1','genre2','genre3','genre4','page1','page2','page3'));
       
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Pfadi SGA";
        return view("pages.index")->with("title", $title);
    }

    public function einsendungen(){
        $data = array(
            "title" => "Einsendungen",
            "groups" => ["FüFü", "Wölfe", "Pfader"]
        );
        return view('pages.einsendungen')->with($data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Lianne's Hairstyling";
        $subtitle = "Hair to care";
        return view('Pages.index', compact('title'), compact('subtitle'));
    }

    public function producten(){
        return view('Pages.producten');
    }

    public function galerij(){
        return view('Pages.galerij');
    }
}

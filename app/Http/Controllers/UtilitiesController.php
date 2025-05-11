<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    public function avatars()
    {
        return view('pages.utilities.avatars');
    }

    public function borders()
    {
        return view('pages.utilities.borders');
    }

    public function colors()
    {
        return view('pages.utilities.colors');
    }

    public function columns()
    {
        return view('pages.utilities.columns');
    }

    public function css_grid()
    {
        return view('pages.utilities.css-grid');
    }

    public function flex()
    {
        return view('pages.utilities.flex');
    }

}
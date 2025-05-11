<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceduiController extends Controller
{
    public function accordions_collapse()
    {
        return view('pages.advancedui.accordions-collapse');
    }                                

    public function draggable_cards()
    {
        return view('pages.advancedui.draggable-cards');
    }

    public function media_player()
    {
        return view('pages.advancedui.media-player');
    }

    public function modals_closes()
    {
        return view('pages.advancedui.modals-closes');
    }

    public function navbars()
    {
        return view('pages.advancedui.navbars');
    }
    
    public function offcanvas()
    {
        return view('pages.advancedui.offcanvas');
    }

    public function ratings()
    {
        return view('pages.advancedui.ratings');
    }

    public function ribbons()
    {
        return view('pages.advancedui.ribbons');
    }

    public function scrollspy()
    {
        return view('pages.advancedui.scrollspy');
    }

    public function skeleton()
    {
        return view('pages.advancedui.skeleton');
    }
    
    public function sortable_list()
    {
        return view('pages.advancedui.sortable-list');
    }
    
    public function swiperjs()
    {
        return view('pages.advancedui.swiperjs');
    }
    
    public function tour()
    {
        return view('pages.advancedui.tour');
    }

}

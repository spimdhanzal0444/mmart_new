<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Creative;
use App\Models\GeneraleSettings;
use App\Models\HomeContact;
use App\Models\RankWeb;
use App\Models\WorkProcess;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $general = GeneraleSettings::orderBy('id', 'DESC')->first();
        $creative = Creative::orderBy('id', 'DESC')->first();
        $works = WorkProcess::orderBy('id', 'DESC')->first();
        $homeContact = HomeContact::orderBy('id', 'DESC')->first();
        $ranks = RankWeb::orderBy('id', 'DESC')->first();
        return view('front.index',compact('general', 'creative', 'works', 'homeContact','ranks'));
    }
}

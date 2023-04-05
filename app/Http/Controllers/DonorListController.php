<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorListController extends Controller
{
    public function index() {
        return view('donors');
    }

    public function view(){
        return view('donors');
    }
}

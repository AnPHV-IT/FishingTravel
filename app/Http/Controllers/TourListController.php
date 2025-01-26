<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourListController extends Controller
{
    public function index()
    {
        return view('users.tour-list.index');
    }
}

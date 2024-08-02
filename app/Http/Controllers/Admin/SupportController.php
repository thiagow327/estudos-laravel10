<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support) // dependence injection, create object automatic
    {
        $supports = $support->all();
        dd($supports); //Dump and Die

        return view('admin/supports/index', compact('supports'));
    }
}

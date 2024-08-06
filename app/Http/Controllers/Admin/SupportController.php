<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request; //contem dados da request para o server

class SupportController extends Controller
{
    public function index(Support $support) // dependence injection, create object automatic
    {
        $supports = $support->all();
        // dd($supports); //Dump and Die

        return view('admin/supports/index', compact('supports'));
    }

    public function show(string|int $id)
    {
        // ou `Support::where('id', 'value');` // ou `Support::where('id', '>=', 'value');`
        if (!$support = Support::find($id)) {
            return back();
        }

        return view('admin/supports/show', compact('support'));
    }

    public function create()
    {

        return view('admin/supports/create');
    }

    public function store(Request $request, Support $support)
    {
        $data = ($request->all());
        $data['status'] = 'a';

        $support->create($data);

        return redirect()->route('supports.index');
    }
}

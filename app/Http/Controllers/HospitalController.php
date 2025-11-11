<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        $data = Hospital::all();
        return view('hospitals.index', compact('data'));
    }

    public function create()
    {
        return view('hospitals.create');
    }

    public function store(Request $request)
    {
        Hospital::create($request->all());
        return redirect('/hospitals');
    }

    public function edit($id)
    {
        $data = Hospital::find($id);
        return view('hospitals.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Hospital::find($id)->update($request->all());
        return redirect('/hospitals');
    }

    public function destroy(Request $request)
    {
        Hospital::find($request->id)->delete();
        return response()->json(['success' => true]);
    }
}

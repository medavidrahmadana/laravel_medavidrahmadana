<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $hospitals = Hospital::all();
        $query = Patient::with('hospital');

        if ($request->hospital_id) {
            $query->where('hospital_id', $request->hospital_id);
        }

        $data = $query->get();

        if ($request->ajax()) {
            return view('patients.table', compact('data'))->render();
        }

        return view('patients.index', compact('data', 'hospitals'));
    }


    public function create()
    {
        $hospitals = Hospital::all();
        return view('patients.create', compact('hospitals'));
    }

    public function store(Request $request)
    {
        Patient::create($request->all());
        return redirect('/patients');
    }

    public function edit($id)
    {
        $data = Patient::find($id);
        $hospitals = Hospital::all();
        return view('patients.edit', compact('data', 'hospitals'));
    }

    public function update(Request $request, $id)
    {
        Patient::find($id)->update($request->all());
        return redirect('/patients');
    }

    public function destroy(Request $request)
    {
        Patient::find($request->id)->delete();
        return response()->json(['success' => true]);
    }
}

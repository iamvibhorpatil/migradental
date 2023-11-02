<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use App\Models\TreatmentType;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treatment = Treatment::latest()->get();

        return view('admin.pages.adm_treatment', compact('treatment'));
    }


    public function store(Request $request)
    {
        try {
            $treatment = new Treatment();

            $treatment->category = $request->category;
            $treatment->treatment_type = $request->treatment_type;
            $treatment->status = $request->status;

            $treatment->save();

            return redirect()->back()->with('success', 'Treatment Added Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    public function edit(Treatment $treatment, $id)
    {
        $treatment = Treatment::find($id);

        return view('admin.pages.update_treatment', compact('treatment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Treatment $treatment, $id)
    {
        try {
            $treatment =  Treatment::find($id);

            $treatment->category = $request->category;
            $treatment->treatment_type = $request->treatment_type;
            $treatment->status = $request->status;

            $treatment->update();

            return redirect('/adm_treatment')->with('success', 'Treatment Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Treatment $treatment, $id)
    {
        $treatment = Treatment::find($id);
        $treatment->delete();
        return redirect()->back()->with('delete', 'Treatment Deleted Successfully');
    }

    // for user interface 

    public function view_treatment()
    {
        $treatment = session()->get('treatment', []);

        if (empty($treatment)) {
            return redirect()->back()->with('error', 'Data not found');
        }
        return view('layouts.view_treatment', compact('treatment'));
    }

    public function get_view_treatment_id(Request $request)
    {

        $treatment_type = TreatmentType::where('treatment_type_id', $request->treatment_id)
            ->where('status', 'Active')->get();

        session()->put('treatment', $treatment_type);

        return response()->json([
            'success' => true
        ]);
    }
}

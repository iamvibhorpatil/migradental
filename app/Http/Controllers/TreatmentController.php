<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treatment = Treatment::latest()->get();

        return view('admin.pages.adm_treatment',compact('treatment'));
    }

    
    public function store(Request $request)
    {
        
       $treatment = new Treatment();

       $treatment->category = $request->category;
       $treatment->treatment_type = $request->treatment_type;
       $treatment->status = $request->status;
        
       $treatment->save();

       return redirect()->back()->with('success','Treatment Added Successfully');
    }

    public function edit(Treatment $treatment,$id)
    {
        $treatment = Treatment::find($id);

        return view('admin.pages.update_treatment',compact('treatment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Treatment $treatment,$id)
    {
        $treatment =  Treatment::find($id);

        $treatment->category = $request->category;
        $treatment->treatment_type = $request->treatment_type;
        $treatment->status = $request->status;
         
        $treatment->update();
 
        return redirect('/adm_treatment')->with('success','Treatment Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Treatment $treatment,$id)
    {
        $treatment = Treatment::find($id);
        $treatment->delete();
        return redirect()->back()->with('delete','Treatment Deleted Successfully');
    }
}

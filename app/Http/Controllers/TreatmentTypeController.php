<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use App\Models\TreatmentType;
use Illuminate\Http\Request;

class TreatmentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treatment = Treatment::where('status', 'Active')->get();
        $treatment_type = TreatmentType::latest()->with('Treatment')->get();

        return view('admin.pages.treatment_type', compact('treatment_type', 'treatment',));
    }


    public function get_treatment_type(Request $request)
    {
        $treatment_type = Treatment::where('category', $request->cat)->get();
        return response()->json($treatment_type);
    }

    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:5048',
        ]);

        $treatment_type = new TreatmentType();

        $treatment_type->category = $request->category;
        $treatment_type->treatment_type_id = $request->treatment_type_id;
        $treatment_type->question = $request->question;
        $treatment_type->answer = $request->answer;
        $treatment_type->status = $request->status;
        $image = $request->image;

        $imageName = $image->getClientOriginalName();
        $imagePath = 'public/assets/uploads/' . $imageName;
        $image->move(public_path('assets/uploads'), $imagePath);
        $treatment_type->image = $imageName;

        $treatment_type->save();

        return redirect()->back()->with('success', 'Data uploaded successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TreatmentType $treatmentType, $id)
    {
        $treatment_type = TreatmentType::with('Treatment')->find($id);

        return view('admin.pages.update_treatment_type', compact('treatment_type'));
    }

    public function update(Request $request, TreatmentType $treatmentType, $id)
    {
       

        $treatment_type =  TreatmentType::find($id);

        $treatment_type->category = $request->category;
        $treatment_type->treatment_type_id = $request->treatment_type_id;
        $treatment_type->question = $request->question;
        $treatment_type->answer = $request->answer;
        $treatment_type->status = $request->status;
        $image = $request->image;

        if ($image) {
            $allowedExtensions = ['png', 'jpg', 'jpeg'];

            // Check if the file extension is allowed
            $extension = strtolower($image->getClientOriginalExtension());
            if (!in_array($extension, $allowedExtensions)) {
                return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
            }
            $imageName = $image->getClientOriginalName();
            $imagePath = 'public/assets/uploads/' . $imageName;
            $image->move(public_path('assets/uploads'), $imagePath);
            $treatment_type->image = $imageName;
        }
        $treatment_type->update();

        return redirect('/treatment_type')->with('success', 'Data Updated successfully');
    }

    public function destroy(TreatmentType $treatmentType, $id)
    {
        $treatment_type = TreatmentType::find($id);
        $treatment_type->delete();
        return redirect()->back()->with('delete', 'Treatment Type Deleted Successfully');
    }
}

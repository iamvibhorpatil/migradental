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
         
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5048',
            ]);

            $treatment_type = new TreatmentType();

            $treatment_type->category = $request->category;
            $treatment_type->treatment_type_id = $request->treatment_type_id;
            $treatment_type->question = $request->question;
            $treatment_type->answer = $request->answer;
            $treatment_type->status = $request->status;
            

            if ($request->hasFile('image')) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];
                $imagePaths = [];
    
                // Process and save new images
                foreach ($request->file('image') as $image) {
                    $extension = strtolower($image->getClientOriginalExtension());
                    if (!in_array($extension, $allowedExtensions)) {
                        return redirect()->back()->withErrors(['error' => 'Only PNG, JPG, and JPEG images are allowed.']);
                    }
    
                    $imageName = $image->getClientOriginalName();
                    $imagePath = 'public/assets/uploads/' . $imageName;
                    $image->move(public_path('assets/uploads'), $imagePath);
                    $imagePaths[] = $imageName;
                }
    
                // Combine new and existing image filenames
                if ($treatment_type->image) {
                    $existingImages = explode(',', $treatment_type->image);
                    $imagePaths = array_merge($existingImages, $imagePaths);
                }

                $treatment_type->image = implode(',', $imagePaths);
            }
            $treatment_type->save();

            return redirect()->back()->with('success', 'Data uploaded successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
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
        try {
            $treatment_type =  TreatmentType::find($id);

            $treatment_type->category = $request->category;
            $treatment_type->treatment_type_id = $request->treatment_type_id;
            $treatment_type->question = $request->question;
            $treatment_type->answer = $request->answer;
            $treatment_type->status = $request->status;
            

            if ($request->hasFile('image')) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];
                $imagePaths = [];
    
                // Process and save new images
                foreach ($request->file('image') as $image) {
                    $extension = strtolower($image->getClientOriginalExtension());
                    if (!in_array($extension, $allowedExtensions)) {
                        return redirect()->back()->withErrors(['error' => 'Only PNG, JPG, and JPEG images are allowed.']);
                    }
    
                    $imageName = $image->getClientOriginalName();
                    $imagePath = 'public/assets/uploads/' . $imageName;
                    $image->move(public_path('assets/uploads'), $imagePath);
                    $imagePaths[] = $imageName;
                }
    
                // Combine new and existing image filenames
                if ($treatment_type->image) {
                    $existingImages = explode(',', $treatment_type->image);
                    $imagePaths = array_merge($existingImages, $imagePaths);
                }
    
                $treatment_type->image = implode(',', $imagePaths);
            }
            $treatment_type->update();

            return redirect('/treatment_type')->with('success', 'Data Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    public function destroy(TreatmentType $treatmentType, $id)
    {
        $treatment_type = TreatmentType::find($id);
        $treatment_type->delete();
        return redirect()->back()->with('delete', 'Treatment Type Deleted Successfully');
    }
    public function delete_image_treatment(Request $request)
    {
        $itemId = $request->itemId;
        $index = $request->index;
        $treatment_type = TreatmentType::find($itemId);

        $imageArray = explode(',', $treatment_type->image);

        $imageIndexToDelete = $index; 

        
        if ($imageIndexToDelete >= 0 && $imageIndexToDelete < count($imageArray)) {
            
            $deletedImage = array_splice($imageArray, $imageIndexToDelete, 1)[0];

            
            $treatment_type->image = implode(',', $imageArray);
            $treatment_type->save();

            
            $deletedImagePath = public_path('assets/uploads/') . $deletedImage;
            if (file_exists($deletedImagePath)) {
                unlink($deletedImagePath);
            }
        }

        return response()->json([
            'success' => true,
        ]);
    }
}

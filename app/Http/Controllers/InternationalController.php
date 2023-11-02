<?php

namespace App\Http\Controllers;

use App\Models\International;
use Illuminate\Http\Request;

class InternationalController extends Controller
{
    public function international()
    {

        $international_client = International::where('status', 'Active')->latest()->get();
        return view('layouts.international', compact('international_client'));
    }

    public function index()
    {
        $international_client = International::latest()->get();

        return view('admin.pages.international_client', compact('international_client'));
    }



    public function store(Request $request)
    {
        try {
            $international_client = new International();

            $international_client->question = $request->question;
            $international_client->answer = $request->answer;
            $international_client->status = $request->status;

            if ($request->hasFile('image')) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];
                $imagePaths = [];

                foreach ($request->file('image') as $image) {
                    $extension = strtolower($image->getClientOriginalExtension());
                    if (!in_array($extension, $allowedExtensions)) {
                        return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                    }

                    $imageName = $image->getClientOriginalName();
                    $imagePath = 'public/assets/uploads/' . $imageName;
                    $image->move(public_path('assets/uploads'), $imagePath);
                    $imagePaths[] = $imageName;
                }

                $international_client->image = implode(',', $imagePaths);
            }
            $international_client->save();

            return redirect()->back()->with('success', 'Data uploaded successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    public function edit(International $international, $id)
    {
        $international_client = International::find($id);

        return view('admin.pages.update_international_client', compact('international_client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, International $international, $id)
    {
        try {
            $international_client =  International::find($id);

            $international_client->question = $request->question;
            $international_client->answer = $request->answer;
            $international_client->status = $request->status;
            
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
                if ($international_client->image) {
                    $existingImages = explode(',', $international_client->image);
                    $imagePaths = array_merge($existingImages, $imagePaths);
                }
    
                $international_client->image = implode(',', $imagePaths);
            }

            $international_client->update();

            return redirect('/international_client')->with('success', 'Data Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(International $international, $id)
    {
        $international_client = International::find($id);
        $international_client->delete();
        return redirect()->back()->with('delete', 'International Client  Deleted Successfully');
    }
    public function delete_image(Request $request)
    {
        $itemId = $request->itemId;
        $index = $request->index;
        $international = International::find($itemId);

        $imageArray = explode(',', $international->image);

        $imageIndexToDelete = $index; 

        
        if ($imageIndexToDelete >= 0 && $imageIndexToDelete < count($imageArray)) {
            
            $deletedImage = array_splice($imageArray, $imageIndexToDelete, 1)[0];

            
            $international->image = implode(',', $imageArray);
            $international->save();

            
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

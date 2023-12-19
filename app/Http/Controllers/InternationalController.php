<?php

namespace App\Http\Controllers;

use App\Models\International;
use Illuminate\Http\Request;

class InternationalController extends Controller {
    public function international() {

        return view('layouts.international');
    }

    public function index() {
        $international_client = International::latest()->get();

        return view('admin.pages.international_client', compact('international_client'));
    }



    public function store(Request $request) {
        try {
            // dd($request);
            // die();
            $international_client = new International();

            $international_client->first_name = $request->first_name;
            $international_client->last_name = $request->last_name;
            $international_client->number = $request->number;
            $international_client->email = $request->email;
            $international_client->dob = $request->dob;
            if($request->has('preliminary_dental')) {
                $international_client->preliminary_dental = implode(', ', $request->input('preliminary_dental'));
            }
            $international_client->other_description = $request->other_description;
            $international_client->preliminary_dental_other = $request->preliminary_dental_other;
            $international_client->whatsaap_booking = $request->whatsaap_booking;
            $international_client->treatment_duration = $request->treatment_duration;
            $international_client->td_startDate = $request->td_startDate;
            $international_client->td_endDate = $request->td_endDate;
            $international_client->accomodating_plan = $request->accomodating_plan;
            $international_client->ap_startDate = $request->ap_startDate;
            $international_client->ap_endDate = $request->ap_endDate;
            $international_client->ap_text = $request->ap_text;
            $international_client->additional_service = $request->additional_service;
            $international_client->special_request = $request->special_request;

            if ($request->hasFile('file')) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];
                $imageNames = [];
    
                foreach ($request->file('file') as $image) {
                    $extension = strtolower($image->getClientOriginalExtension());
                    if (!in_array($extension, $allowedExtensions)) {
                        return redirect()->back()->withErrors(['delete' => 'Only PNG, JPG, and JPEG images are allowed.']);
                    }
    
                    $imageName = $image->getClientOriginalName();
                    $imageNames[] = $imageName;
    
                    $imagePath = 'assets/uploads/' . $imageName;
                    $image->move(public_path('assets/uploads'), $imageName);
                }
    
                $international_client->files = implode(',', $imageNames);
            }
    
            $international_client->save();
    
            
            

            return redirect()->back()->with('success', 'Data uploaded successfully');
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', 'An error occurred while saving data: '.$e->getMessage());
        }
    }

    public function edit(International $international, $id) {
        $international_client = International::find($id);

        return view('admin.pages.update_international_client', compact('international_client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, International $international, $id) {
        try {
            $international_client = International::find($id);

            $international_client->question = $request->question;
            $international_client->answer = $request->answer;
            $international_client->status = $request->status;

            if($request->hasFile('image')) {
                $allowedExtensions = ['png', 'jpg', 'jpeg'];
                $imagePaths = [];

                // Process and save new images
                foreach($request->file('image') as $image) {
                    $extension = strtolower($image->getClientOriginalExtension());
                    if(!in_array($extension, $allowedExtensions)) {
                        return redirect()->back()->withErrors(['error' => 'Only PNG, JPG, and JPEG images are allowed.']);
                    }

                    $imageName = $image->getClientOriginalName();
                    $imagePath = 'public/assets/uploads/'.$imageName;
                    $image->move(public_path('assets/uploads'), $imagePath);
                    $imagePaths[] = $imageName;
                }

                // Combine new and existing image filenames
                if($international_client->image) {
                    $existingImages = explode(',', $international_client->image);
                    $imagePaths = array_merge($existingImages, $imagePaths);
                }

                $international_client->image = implode(',', $imagePaths);
            }

            $international_client->update();

            return redirect('/international_client')->with('success', 'Data Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: '.$e->getMessage());
        }
    }


    public function international_detail_view(Request $request,$id) 
     {
        // dd($request);
        // die();
        $international_client = International::where('id',$id)->first();
       return view('admin.pages.international_detail_view' , compact('international_client'));
    } 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(International $international, $id) {
        $international_client = International::find($id);
        $international_client->delete();
        return redirect()->back()->with('delete', 'International Client  Deleted Successfully');
    }
    public function delete_image(Request $request) {
        $itemId = $request->itemId;
        $index = $request->index;
        $international = International::find($itemId);

        $imageArray = explode(',', $international->image);

        $imageIndexToDelete = $index;


        if($imageIndexToDelete >= 0 && $imageIndexToDelete < count($imageArray)) {

            $deletedImage = array_splice($imageArray, $imageIndexToDelete, 1)[0];


            $international->image = implode(',', $imageArray);
            $international->save();


            $deletedImagePath = public_path('assets/uploads/').$deletedImage;
            if(file_exists($deletedImagePath)) {
                unlink($deletedImagePath);
            }
        }

        return response()->json([
            'success' => true,
        ]);
    }
}

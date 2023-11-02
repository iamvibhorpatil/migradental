<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ImagesCategory;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function image()
    {
        $images_category = ImagesCategory::where('status', 'Active')->get();
        $adm_image = Image::latest()->with('ImagesCategory')->get();

        if (!$images_category->isEmpty()) {
            $firstCategory = $images_category->first();
            $adm_image_first = Image::where('category_id', $firstCategory->id)->get();
        } else {
            $adm_image_first = null;
        }


        return view('layouts.image', compact('adm_image', 'images_category', 'adm_image_first'));
    }

    public function get_images_category_id(Request $request)
    {
        $image = Image::where('category_id', $request->cat_id)->get();
        return response()->json($image);
    }

    public function index()
    {
        $images_category = ImagesCategory::where('status', 'Active')->get();
        $adm_images = Image::latest()->with('ImagesCategory')->get();

        return view('admin.pages.adm_images', compact('adm_images', 'images_category',));
    }


    public function store(Request $request)
    {
        try {
            $adm_image = new Image();

            $adm_image->category_id = $request->category_id;
            $adm_image->title = $request->title;
            $adm_image->status = $request->status;
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
                $adm_image->image = $imageName;
            }
            $adm_image->save();

            return redirect()->back()->with('success', 'Data uploaded successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    public function edit(Image $image, $id)
    {
        $adm_images = Image::find($id);
        $images_category = ImagesCategory::where('status', 'Active')->get();

        return view('admin.pages.update_adm_images', compact('adm_images', 'images_category'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image, $id)
    {
        try {
            $adm_image =  Image::find($id);

            $adm_image->category_id = $request->category_id;
            $adm_image->title = $request->title;
            $adm_image->status = $request->status;
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
                $adm_image->image = $imageName;
            }
            $adm_image->update();

            return redirect('/adm_images')->with('success', 'Data Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image, $id)
    {
        $adm_image = Image::find($id);
        $adm_image->delete();
        return redirect()->back()->with('delete', 'Image Type Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ImagesCategory;
use Illuminate\Http\Request;

class ImagesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images_category = ImagesCategory::latest()->get();

        return view('admin.pages.images_category', compact('images_category'));
    }

    public function store(Request $request)
    {
        $images_category = new ImagesCategory();

        $images_category->category = $request->category;
        $images_category->status = $request->status;

       
        $images_category->save();

        return redirect()->back()->with('success', 'Data uploaded successfully');
    }


    public function edit(ImagesCategory $imagesCategory, $id)
    {
       $images_category = ImagesCategory::find($id);

        return view('admin.pages.update_images_category', compact('images_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImagesCategory $imagesCategory, $id)
    {
        $images_category =  ImagesCategory::find($id);

        $images_category->category = $request->category;
        $images_category->status = $request->status;

        $images_category->update();

        return redirect('/images_category')->with('success', 'Data Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImagesCategory $imagesCategory, $id)
    {
        $images_category = ImagesCategory::find($id);
        $images_category->delete();
        return redirect()->back()->with('delete', 'Image Category Deleted Successfully');
    }
}

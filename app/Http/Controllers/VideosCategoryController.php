<?php

namespace App\Http\Controllers;

use App\Models\VideosCategory;
use Illuminate\Http\Request;

class VideosCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos_category = VideosCategory::latest()->get();

        return view('admin.pages.videos_category', compact('videos_category'));
    }

    public function store(Request $request)
    {
        try {
            $videos_category = new VideosCategory();

            $videos_category->category = $request->category;
            $videos_category->status = $request->status;


            $videos_category->save();

            return redirect()->back()->with('success', 'Data uploaded successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }


    public function edit(VideosCategory $videosCategory, $id)
    {
        $videos_category = VideosCategory::find($id);

        return view('admin.pages.update_videos_category', compact('videos_category'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideosCategory $videosCategory, $id)
    {
        try {
            $videos_category =  VideosCategory::find($id);

            $videos_category->category = $request->category;
            $videos_category->status = $request->status;

            $videos_category->update();

            return redirect('/videos_category')->with('success', 'Data Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideosCategory $videosCategory, $id)
    {
        $videos_category = VideosCategory::find($id);
        $videos_category->delete();
        return redirect()->back()->with('delete', 'Image Category Deleted Successfully');
    }
}

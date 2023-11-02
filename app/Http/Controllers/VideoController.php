<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\VideosCategory;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function video()
    {
        $videos_category = VideosCategory::where('status', 'Active')->get();
        $adm_videos = Video::latest()->with('videosCategory')->get();

        if (!$videos_category->isEmpty()) {
            $firstCategory = $videos_category->first();
            $adm_videos_first = Video::where('category_id', $firstCategory->id)->get();
        } else {
            $adm_videos_first = null;
        }


        return view('layouts.video', compact('adm_videos', 'videos_category', 'adm_videos_first'));
    }

    public function get_videos_category_id(Request $request)
    {
        $video = Video::where('category_id', $request->cat_id)->get();
        return response()->json($video);
    }
    public function index()
    {
        $videos_category = VideosCategory::where('status', 'Active')->get();
        $adm_videos = Video::latest()->with('VideosCategory')->get();

        return view('admin.pages.adm_videos', compact('adm_videos', 'videos_category',));
    }


    public function store(Request $request)
    {
        try {
            $adm_videos = new Video();

            $adm_videos->category_id = $request->category_id;
            $adm_videos->title = $request->title;
            $adm_videos->status = $request->status;
            $adm_videos->video = $request->video;


            $adm_videos->save();

            return redirect()->back()->with('success', 'Data uploaded successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    public function edit(Video $video, $id)
    {
        $adm_videos = Video::find($id);
        $videos_category = VideosCategory::where('status', 'Active')->get();

        return view('admin.pages.update_adm_videos', compact('adm_videos', 'videos_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video, $id)
    {
        try {
            $adm_videos =  Video::find($id);

            $adm_videos->category_id = $request->category_id;
            $adm_videos->title = $request->title;
            $adm_videos->status = $request->status;
            $adm_videos->display = $request->display;
            $adm_videos->video = $request->video;


            $adm_videos->update();

            return redirect('/adm_videos')->with('success', 'Data Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video, $id)
    {
        $adm_videos = Video::find($id);
        $adm_videos->delete();
        return redirect()->back()->with('delete', 'Image Type Deleted Successfully');
    }
}

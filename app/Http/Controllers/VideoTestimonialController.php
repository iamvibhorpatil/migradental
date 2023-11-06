<?php

namespace App\Http\Controllers;

use App\Models\VideoTestimonial;
use App\Models\TestimonialCategory;
use Illuminate\Http\Request;

class VideoTestimonialController extends Controller
{
    public function video_testimonial()
    {
        $testimonial_category = TestimonialCategory::where('status', 'Active')->get();
        $adm_testimonial = VideoTestimonial::latest()->with('TestimonialCategory')->get();

        if (!$testimonial_category->isEmpty()) {
            $firstCategory = $testimonial_category->first();
            $adm_testimonial_first = VideoTestimonial::where('category_id', $firstCategory->id)->get();
        } else {
            $adm_testimonial_first = null;
        }


        return view('layouts.video_testimonial', compact('adm_testimonial', 'testimonial_category', 'adm_testimonial_first'));
    }

    public function get_video_category_id(Request $request)
    {
        $testimonial = VideoTestimonial::where('category_id', $request->cat_id)->get();
        return response()->json($testimonial);
    }

    public function index()
    {
        $testimonial_category = TestimonialCategory::where('status', 'Active')->get();
        $adm_video_testimonial = VideoTestimonial::latest()->with('TestimonialCategory')->get();

        return view('admin.pages.adm_video_testimonial', compact('adm_video_testimonial', 'testimonial_category',));
    }

   
    public function store(Request $request)
    {
        try {
            $adm_video_testimonial = new VideoTestimonial();

            $adm_video_testimonial->category_id = $request->category_id;
            $adm_video_testimonial->title = $request->title;
            $adm_video_testimonial->status = $request->status;
            $adm_video_testimonial->video = $request->video;

           
            $adm_video_testimonial->save();

            return redirect()->back()->with('success', 'Data uploaded successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    public function edit(VideoTestimonial $videoTestimonial, $id)
    {
       $adm_video_testimonial = VideoTestimonial::find($id);
        $testimonial_category = TestimonialCategory::where('status', 'Active')->get();

        return view('admin.pages.update_adm_video_testimonial', compact('adm_video_testimonial', 'testimonial_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideoTestimonial $videoTestimonial, $id)
    {
        try {
            $adm_video_testimonial =  VideoTestimonial::find($id);

            $adm_video_testimonial->category_id = $request->category_id;
            $adm_video_testimonial->title = $request->title;
            $adm_video_testimonial->status = $request->status;
            $adm_video_testimonial->video = $request->video;

           
            $adm_video_testimonial->update();

            return redirect('/adm_video_testimonial')->with('success', 'Data Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoTestimonial $videoTestimonial, $id)
    {
        $adm_vide_testimonial = VideoTestimonial::find($id);
        $adm_vide_testimonial->delete();
        return redirect()->back()->with('delete', 'Testimonial Type Deleted Successfully');
    }
}

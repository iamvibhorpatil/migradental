<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\TestimonialCategory;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        $testimonial_category = TestimonialCategory::where('status', 'Active')->get();
        $adm_testimonial = Testimonial::latest()->with('TestimonialCategory')->get();

        if (!$testimonial_category->isEmpty()) {
            $firstCategory = $testimonial_category->first();
            $adm_testimonial_first = Testimonial::where('category_id', $firstCategory->id)->get();
        } else {
            $adm_testimonial_first = null;
        }


        return view('layouts.testimonial', compact('adm_testimonial', 'testimonial_category', 'adm_testimonial_first'));
    }

    public function get_category_id(Request $request)
    {
        $testimonial = Testimonial::where('category_id',$request->cat_id)->get();
        return response()->json($testimonial);
    }

    public function index()
    {
        $testimonial_category = TestimonialCategory::where('status', 'Active')->get();
        $adm_testimonial = Testimonial::latest()->with('TestimonialCategory')->get();

        return view('admin.pages.adm_testimonial', compact('adm_testimonial', 'testimonial_category',));
    }

    public function store(Request $request)
    {
        $adm_testimonial = new Testimonial();

        $adm_testimonial->category_id = $request->category_id;
        $adm_testimonial->title = $request->title;
        $adm_testimonial->status = $request->status;
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
            $adm_testimonial->image = $imageName;
        }
        $adm_testimonial->save();

        return redirect()->back()->with('success', 'Data uploaded successfully');
    }

    public function edit(Testimonial $testimonial, $id)
    {
        $adm_testimonial = Testimonial::find($id);
        $testimonial_category = TestimonialCategory::where('status', 'Active')->get();

        return view('admin.pages.update_adm_testimonial', compact('adm_testimonial', 'testimonial_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial, $id)
    {
        $adm_testimonial =  Testimonial::find($id);

        $adm_testimonial->category_id = $request->category_id;
        $adm_testimonial->title = $request->title;
        $adm_testimonial->status = $request->status;
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
            $adm_testimonial->image = $imageName;
        }
        $adm_testimonial->update();

        return redirect('/adm_testimonial')->with('success', 'Data Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial, $id)
    {
        $adm_testimonial = Testimonial::find($id);
        $adm_testimonial->delete();
        return redirect()->back()->with('delete', 'Testimonial Type Deleted Successfully');
    }
}

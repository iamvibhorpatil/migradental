<?php

namespace App\Http\Controllers;

use App\Models\TestimonialCategory;
use Illuminate\Http\Request;

class TestimonialCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial_category = TestimonialCategory::latest()->get();

        return view('admin.pages.testimonial_category', compact('testimonial_category'));
    }


    public function store(Request $request)
    {
        $testimonial_category = new TestimonialCategory();

        $testimonial_category->category = $request->category;
        $testimonial_category->status = $request->status;

       
        $testimonial_category->save();

        return redirect()->back()->with('success', 'Data uploaded successfully');
    }

    
    public function edit(TestimonialCategory $testimonialCategory, $id)
    {
        $testimonial_category = TestimonialCategory::find($id);

        return view('admin.pages.update_testimonial_category', compact('testimonial_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TestimonialCategory $testimonialCategory, $id)
    {
        $testimonial_category =  TestimonialCategory::find($id);

        $testimonial_category->category = $request->category;
        $testimonial_category->status = $request->status;

        $testimonial_category->update();

        return redirect('/testimonial_category')->with('success', 'Data Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestimonialCategory $testimonialCategory, $id)
    {
        $testimonial_category = TestimonialCategory::find($id);
        $testimonial_category->delete();
        return redirect()->back()->with('delete', 'Testimonial Category Deleted Successfully');
    }
}

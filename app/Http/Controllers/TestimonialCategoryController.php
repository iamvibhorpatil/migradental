<?php

namespace App\Http\Controllers;

use App\Models\TestimonialCategory;
use App\Models\Comment;
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
        try {
            $testimonial_category = new TestimonialCategory();

            $testimonial_category->category = $request->category;
            $testimonial_category->status = $request->status;


            $testimonial_category->save();

            return redirect()->back()->with('success', 'Data uploaded successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
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
        try {
            $testimonial_category =  TestimonialCategory::find($id);

            $testimonial_category->category = $request->category;
            $testimonial_category->status = $request->status;

            $testimonial_category->update();

            return redirect('/testimonial_category')->with('success', 'Data Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
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

    //  comments
    public function comment()
    {
        $comment = comment::latest()->get();

        return view('admin.pages.comment', compact('comment'));
    }
    public function store_comment(Request $request)
    {
        try {
            $comment = new Comment();

            $comment->name = $request->name;
            $comment->blog_id = $request->blog_id;
            $comment->mobile = $request->mobile;
            $comment->comment = $request->comment;


            $comment->save();

            return redirect()->back()->with('success', 'Comment Added Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }

    public function destroy_comment(TestimonialCategory $testimonialCategory, $id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back()->with('delete', 'Comment  Deleted Successfully');
    }
    public function edit_comment(Comment $comment, $id)
    {
        $comment = Comment::find($id);

        return view('admin.pages.update_comment', compact('comment'));
    }
    public function update_comment(Request $request, Comment $comment, $id)
    {
        try {
            $comment =  Comment::find($id);

            $comment->display = $request->display;
           

            $comment->update();

            return redirect('/comment')->with('success', 'Data Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }
}

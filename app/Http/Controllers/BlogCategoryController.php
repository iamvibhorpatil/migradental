<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_category = BlogCategory::latest()->get();

        return view('admin.pages.blog_category', compact('blog_category'));
    }

    
    public function store(Request $request)
    {
        $blog_category = new BlogCategory();

        $blog_category->category = $request->category;
        $blog_category->status = $request->status;

       
        $blog_category->save();

        return redirect()->back()->with('success', 'Data uploaded successfully');
    }

    public function edit(BlogCategory $blogCategory, $id)
    {
        $blog_category = BlogCategory::find($id);

        return view('admin.pages.update_blog_category', compact('blog_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogCategory $blogCategory, $id)
    {
        $blog_category =  BlogCategory::find($id);

        $blog_category->category = $request->category;
        $blog_category->status = $request->status;

        $blog_category->update();

        return redirect('/blog_category')->with('success', 'Data Updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogCategory $blogCategory, $id)
    {
        $blog_category = BlogCategory::find($id);
        $blog_category->delete();
        return redirect()->back()->with('delete', 'Image Category Deleted Successfully');
    }
}

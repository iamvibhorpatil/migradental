<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blog_category = BlogCategory::where('status', 'Active')->get();
        $adm_blog = Blog::latest()->with('BlogCategory')->get();

        if (!$blog_category->isEmpty()) {
            $firstCategory = $blog_category->first();
            $adm_blog_first = Blog::where('category_id', $firstCategory->id)->get();
        } else {
            $adm_blog_first = null;
        }


        return view('layouts.blog', compact('adm_blog', 'blog_category', 'adm_blog_first'));
    }

    public function get_blog_category_id(Request $request)
    {
        $blog = Blog::where('category_id',$request->cat_id)->get();
        return response()->json($blog);
    }
    public function index()
    {
        $blog_category = BlogCategory::where('status', 'Active')->get();
        $adm_blog = Blog::latest()->with('BlogCategory')->get();

        return view('admin.pages.adm_blog', compact('adm_blog', 'blog_category',));
    }

    
    public function store(Request $request)
    {
        $adm_image = new Blog();

        $adm_image->category_id = $request->category_id;
        $adm_image->title = $request->title;
        $adm_image->description = $request->description;
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
    }

    
    public function edit(Blog $blog, $id)
    {
        $adm_blog = Blog::find($id);
        $blog_category = BlogCategory::where('status', 'Active')->get();

        return view('admin.pages.update_adm_blog', compact('adm_blog', 'blog_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog, $id)
    {
        $adm_image =  Blog::find($id);

        $adm_image->category_id = $request->category_id;
        $adm_image->title = $request->title;
        $adm_image->description = $request->description;
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

        return redirect('/adm_blog')->with('success', 'Data Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog, $id)
    {
        $adm_image = Blog::find($id);
        $adm_image->delete();
        return redirect()->back()->with('delete', 'Blog Deleted Successfully');
    }
}

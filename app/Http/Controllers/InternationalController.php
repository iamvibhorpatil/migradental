<?php

namespace App\Http\Controllers;

use App\Models\International;
use Illuminate\Http\Request;

class InternationalController extends Controller
{
    public function international()
    {

        $international_client = International::where('status','Active')->latest()->get();
        return view('layouts.international',compact('international_client'));
    }

    public function index()
    {
        $international_client = International::latest()->get();

        return view('admin.pages.international_client', compact('international_client'));
    }



    public function store(Request $request)
    {
        $international_client = new International();

        $international_client->question = $request->question;
        $international_client->answer = $request->answer;
        $international_client->status = $request->status;
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
            $international_client->image = $imageName;
        }
        $international_client->save();

        return redirect()->back()->with('success', 'Data uploaded successfully');
    }

    public function edit(International $international, $id)
    {
        $international_client = International::find($id);

        return view('admin.pages.update_international_client', compact('international_client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, International $international, $id)
    {
        $international_client =  International::find($id);

        $international_client->question = $request->question;
        $international_client->answer = $request->answer;
        $international_client->status = $request->status;
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
            $international_client->image = $imageName;
        }
        $international_client->update();

        return redirect('/international_client')->with('success', 'Data Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(International $international, $id)
    {
        $international_client = International::find($id);
        $international_client->delete();
        return redirect()->back()->with('delete', 'International Client  Deleted Successfully');
    }
}

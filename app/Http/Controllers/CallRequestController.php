<?php

namespace App\Http\Controllers;

use App\Models\CallRequest;
use Illuminate\Http\Request;

class CallRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function request_callback()
    {
        $call = CallRequest::all();
        return view('admin.pages.request_callback',compact('call'));
    }

    public function store(Request $request)
    {
        $call = new CallRequest();

        $call->name = $request->name;
        $call->mobile = $request->mobile;

        $call->save();

        return redirect()->back()->with('submit','');
    }

    /**
     * Display the specified resource.
     */
    public function show(CallRequest $callRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CallRequest $callRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CallRequest $callRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CallRequest $callRequest)
    {
        //
    }
}

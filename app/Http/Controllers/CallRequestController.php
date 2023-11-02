<?php

namespace App\Http\Controllers;

use App\Models\CallRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class CallRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all();
        return view('admin.pages.adm_contact', compact('contact'));
    }

    public function destroy_contact(Contact $contact, $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('delete', 'Contact  Deleted Successfully');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function request_callback()
    {
        $call = CallRequest::all();
        return view('admin.pages.request_callback', compact('call'));
    }

    public function store(Request $request)
    {
        try {
            $call = new CallRequest();

            $call->name = $request->name;
            $call->mobile = $request->mobile;

            $call->save();

            return redirect()->back()->with('request_callback_success', 'Submitted: You will be contacted soon.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }
    public function store_contact(Request $request)
    {
        try {
            $contact = new Contact();

            $contact->name = $request->name;
            $contact->mobile = $request->mobile;
            $contact->whats_app = $request->whats_app;
            $contact->subject = $request->subject;
            $contact->message = $request->message;

            $contact->save();

            return redirect()->back()->with('contact_success', 'Your data is Submitted');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage());
        }
    }


    public function destroy(CallRequest $callRequest, $id)
    {
        $callrequest = CallRequest::find($id);
        $callrequest->delete();
        return redirect()->back()->with('delete', 'Call Request Deleted Successfully');
    }
}

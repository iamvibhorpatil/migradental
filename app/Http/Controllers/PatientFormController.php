<?php

namespace App\Http\Controllers;

use App\Models\PatientForm;
use Illuminate\Http\Request;
use PDF;

class PatientFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PatientForm $patientForm)
    {
        $patientForm = PatientForm::all();
        return view('admin.pages.patient_form', compact('patientForm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $patientForm = new PatientForm();
        $patientForm->patient_number = $request->patient_number;
        $patientForm->family_card_number = $request->family_card_number;
        $patientForm->patient_name = $request->patient_name;
        $patientForm->dob = $request->dob;
        $patientForm->age = $request->age;
        $patientForm->mobile_no = $request->mobile_no;
        $patientForm->email_id = $request->email_id;
        $patientForm->aadhar_no = $request->aadhar_no;
        $patientForm->address = $request->address;
        $patientForm->profession = $request->profession;
        $patientForm->city = $request->city;
        $patientForm->state = $request->state;
        $patientForm->country = $request->country;
        $patientForm->guardian_name = $request->guardian_name;
        $patientForm->guardian_no = $request->guardian_no;
        $patientForm->guardian_city = $request->guardian_city;
        $patientForm->referred_by = $request->referred_by;
        $patientForm->referred_name = $request->referred_name;
        $patientForm->time = $request->time;
        $patientForm->appointment_sunday = $request->appointment_sunday;

        $patientForm->save();
        return redirect('patient_form')->with('success', 'Patient Appointment Added Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(PatientForm $patientForm)
    {
        $patientForm = PatientForm::all();
        return view('admin.pages.patient_detail', compact('patientForm'));
    }

    public function patient_detail_view($id)
    {
        // Fetch the specific user's data by ID
        $patientDetail = PatientForm::findOrFail($id);

        return view('admin.pages.patient_detail_view', compact('patientDetail'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PatientForm $patientForm, $id)
    {
        $patientForm = PatientForm::find($id);
        return view('admin.pages.update_patient_form', compact('patientForm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PatientForm $patientForm, $id)
    {
        $patientForm = PatientForm::find($id);
        $patientForm->patient_number = $request->patient_number;
        $patientForm->family_card_number = $request->family_card_number;
        $patientForm->patient_name = $request->patient_name;
        $patientForm->dob = $request->dob;
        $patientForm->age = $request->age;
        $patientForm->mobile_no = $request->mobile_no;
        $patientForm->email_id = $request->email_id;
        $patientForm->aadhar_no = $request->aadhar_no;
        $patientForm->address = $request->address;
        $patientForm->profession = $request->profession;
        $patientForm->city = $request->city;
        $patientForm->state = $request->state;
        $patientForm->country = $request->country;
        $patientForm->guardian_name = $request->guardian_name;
        $patientForm->guardian_no = $request->guardian_no;
        $patientForm->guardian_city = $request->guardian_city;
        $patientForm->referred_by = $request->referred_by;
        $patientForm->referred_name = $request->referred_name;
        $patientForm->time = $request->time;
        $patientForm->appointment_sunday = $request->appointment_sunday;

        $patientForm->update();
        return redirect('patient_detail')->with('success', 'Patient Appointment Updated Success');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PatientForm $patientForm, $id)
    {
        $patientForm = PatientForm::find($id);
        $patientForm->delete();
        return redirect('patient_detail');
    }

    public function export($id)
    {
        // Fetch the data for the specific patient detail with the given ID
        $patientDetail = PatientForm::all();

        view()->share('patientDetail', $patientDetail);
        // Load the PDF view
        $pdf = PDF::loadView('admin.pages.patient_detail_view', compact('patientDetail'));


        // Specify a filename for the PDF (optional)
        // $filename = 'patient_detail.pdf';

        // Generate and return the PDF as a downloadable response
        return $pdf->download("vibhor.pdf");
    }

}

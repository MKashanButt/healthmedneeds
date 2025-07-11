<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'phone' => 'required|max:255',
            'dob' => 'required|date',
            'zip_code' => 'required|max:255',
            'message' => 'required',
        ]);

        Form::create($validatedData);

        return redirect()
            ->back()
            ->with('success', 'Form submitted successfully!');
    }
}

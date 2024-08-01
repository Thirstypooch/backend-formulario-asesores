<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;

class FormSubmissionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'device_type' => 'required|string',
            'device_model' => 'required|string',
            'operating_system' => 'required|string',
            'app_version' => 'required|string',
            'incident_date' => 'required|date',
            'problem_description' => 'required|string',
            'reproduccion_steps' => 'required|string',
            'expected_behavior' => 'required|string',
            'actual_behavior' => 'required|string',
            'severity_level' => 'required|string',
            'has_previously_occurred' => 'required|string',
            'additional_comments' => 'nullable|string',
        ]);

        $formSubmission = FormSubmission::create($validatedData);

        return response()->json(['message' => 'Form submitted successfully', 'data' => $formSubmission], 201);
    }
}

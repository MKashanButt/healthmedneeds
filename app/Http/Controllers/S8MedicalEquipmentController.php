<?php

namespace App\Http\Controllers;

use App\Models\S8MedicalEquipment;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class S8MedicalEquipmentController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate with custom messages
            $validated = $request->validate([
                'fname'     => 'required|max:255',
                'lname'     => 'required|max:255',
                'phone'     => 'required|max:255',
                'dob'       => 'required|date',
                'zip_code'  => 'required|max:255',
                'message'   => 'nullable|string',
            ], [
                'fname.required'    => 'First name is required.',
                'lname.required'    => 'Last name is required.',
                'phone.required'    => 'Phone number is required.',
                'dob.required'      => 'Date of birth is required.',
                'dob.date'          => 'Date of birth must be a valid date.',
                'zip_code.required' => 'ZIP code is required.',
            ]);
            S8MedicalEquipment::create($validated);
            return response()->json([
                'success' => true,
                'message' => 'S8 Medical Equipment data stored successfully.',
                'data'    => $validated,
            ], Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'errors'  => $e->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        } catch (\Exception $e) {
            Log::error('Medical supply store error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong while processing the request.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

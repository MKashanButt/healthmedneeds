<?php

namespace App\Imports;

use App\Models\Form;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class FormImport implements ToModel, WithHeadingRow, WithValidation
{
    public function model(array $row)
    {
        return new Form([
            'fname'        => $row['first_name'] ?? $row['fname'] ?? null,
            'lname'        => $row['last_name'] ?? $row['lname'] ?? null,
            'phone'        => $row['phone'],
            'address'      => $row['address'],
            'medicare_id' => $row['medicare_id'] ?? $row['medicare'] ?? null,
            'dob'         => $row['dob'] ?? $row['date_of_birth'] ?? null,
            'zip_code'     => $row['zip_code'] ?? $row['zip'] ?? null,
            'message'      => $row['message'] ?? '',
            'ip'           => request()->ip(),
        ]);
    }

    public function rules(): array
    {
        return [
            '*.phone' => 'required',
            '*.address' => 'required',
            '*.dob' => 'required|date',
            '*.medicare_id' => 'required',
            '*.zip_code' => 'required',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'phone.required' => 'Phone number is required',
            'address.required' => 'Address is required',
            'dob.required' => 'Date of birth is required',
            'dob.date' => 'Date of birth must be a valid date',
            'medicare_id.required' => 'Medicare ID is required',
            'zip_code.required' => 'Zip code is required',
        ];
    }
}

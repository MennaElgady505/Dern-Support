<?php

namespace App\Http\Controllers;

use App\Models\RepairRequest;
use Illuminate\Http\Request;

class RepairRequestController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'user_type' => 'required|string',
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'device_type' => 'required|string',
            'issue_description' => 'required|string',
            'service_type' => 'required|string',
            'preferred_date' => 'required|date',
        ];
    
        if ($request->service_type === 'drop-off') {
            $rules['dropoff_location'] = 'required|string';
        } elseif ($request->service_type === 'pickup') {
            $rules['pickup_location'] = 'required|string';
        }
    
        $validatedData = $request->validate($rules);
    
        RepairRequest::create([
            'user_type' => $request->user_type,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'device_type' => $request->device_type,
            'issue_description' => $request->issue_description,
            'service_type' => $request->service_type,
            'pickup_address' => $request->pickup_location,
            'office_location' => $request->dropoff_location,
            'preferred_date' => $request->preferred_date,
        ]);
    
        return redirect()->back()->with('success', 'Repair request submitted successfully!');
    }
    
}

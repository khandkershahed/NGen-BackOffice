<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmployeeProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'items' => EmployeeProject::latest()->get(),
        ];
        return view('admin.pages.employee-project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.employee-project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [

            'name' => 'required|string|max:255',
            'supervisor' => 'nullable|array',
            'supervisor.*' => 'exists:admins,id',
            'start_date' => 'nullable|date',
            'start_time' => 'nullable',
            'end_date' => 'nullable|date',
            'end_time' => 'nullable',
            'type' => 'nullable|string',
            'project_status' => 'nullable|string',
            'weight' => 'nullable|numeric|min:1|max:5',
            'kpi_rating' => 'nullable|numeric|between:0,100',
            'total_working_day' => 'nullable|integer|min:0',
            'total_working_man_hour' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'review' => 'nullable|string',
            'status' => 'required|string|in:active,inactive',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the Offer model instance
        EmployeeProject::create([

            'supervisor' => json_encode($request->supervisor),
            'assigned_employee' => json_encode(Auth::guard('admin')->user()->id),

            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,

            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_date' => $request->end_date,
            'end_time' => $request->end_time,

            'project_status' => $request->project_status,
            'review' => $request->review,
            'status' => $request->status,
            'weight' => $request->weight,
            'kpi_rating' => $request->kpi_rating,
            'total_working_day' => $request->total_working_day,
            'total_working_man_hour' => $request->total_working_man_hour,

        ]);

        return redirect()->route('admin.employee-project.index')->with('success', 'Data created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = EmployeeProject::findOrFail($id);
        return view('admin.pages.employee-project.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'supervisor' => 'nullable|array',
            'supervisor.*' => 'exists:admins,id',
            'start_date' => 'nullable|date',
            'start_time' => 'nullable',
            'end_date' => 'nullable|date',
            'end_time' => 'nullable',
            'type' => 'nullable|string',
            'project_status' => 'nullable|string',
            'weight' => 'nullable|numeric|min:1|max:5',
            'kpi_rating' => 'nullable|numeric|between:0,100',
            'total_working_day' => 'nullable|integer|min:0',
            'total_working_man_hour' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'review' => 'nullable|string',
            'status' => 'required|string|in:active,inactive',
        ]);

        // Find the EmployeeProject instance
        $employeeProject = EmployeeProject::findOrFail($id);

        // Update the instance

        $employeeProject->update([
            'supervisor' => json_encode($request->supervisor),
            'assigned_employee' => json_encode([Auth::guard('admin')->user()->id]), // Ensure it's an array

            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,

            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_date' => $request->end_date,
            'end_time' => $request->end_time,

            'project_status' => $request->project_status,
            'review' => $request->review,
            'status' => $request->status,
            'weight' => $request->weight,
            'kpi_rating' => $request->kpi_rating,
            'total_working_day' => $request->total_working_day,
            'total_working_man_hour' => $request->total_working_man_hour,
        ]);

        return redirect()->route('admin.employee-project.index')->with('success', 'Data updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EmployeeProject::findOrFail($id)->delete();

    }

    public function updateStatus(Request $request, $id)
    {
        $offer = EmployeeProject::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

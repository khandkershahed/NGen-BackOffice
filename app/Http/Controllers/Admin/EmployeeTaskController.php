<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmployeeTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'items' => EmployeeTask::latest()->get(),
        ];
        return view('admin.pages.employee-task.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.employee-task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'supervisors' => 'nullable|array',
            'supervisors.*' => 'exists:admins,id',
            'start_date' => 'nullable|date',
            'create_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'extended_date' => 'nullable|date',
            'month' => 'nullable|string',
            'fiscal_year' => 'nullable|string',
            'quarter' => 'nullable|string|in:q1,q2,q3,q4',
            'project_status' => 'nullable|string',
            'duration' => 'nullable|numeric|min:0',
            'point' => 'nullable|numeric|min:0',
            'score' => 'nullable|numeric|min:0',
            'supervisor_rating' => 'nullable|numeric|between:0,100',
            'hr_rating' => 'nullable|numeric|between:0,100',
            'ceo_rating' => 'nullable|numeric|between:0,100',
            'kpi_percentage' => 'nullable|numeric|between:0,100',
            'priority' => 'nullable|numeric|min:0',
            'supervisor_review' => 'nullable|string',
            'hr_review' => 'nullable|string',
            'ceo_review' => 'nullable|string',
            'comment' => 'nullable|string',
            'extended_note' => 'nullable|string',
            'description' => 'nullable|string',
            'review' => 'nullable|string',
            'status' => 'required|string|in:active,inactive',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the EmployeeTask model instance
        EmployeeTask::create([
            'name' => $request->name,
            'supervisors' => json_encode($request->supervisors),
            'employee_id' => Auth::guard('admin')->user()->id,
            'start_date' => $request->start_date,
            'create_date' => $request->create_date,
            'end_date' => $request->end_date,
            'extended_date' => $request->extended_date,
            'month' => $request->month,
            'fiscal_year' => $request->fiscal_year,
            'quarter' => $request->quarter,
            'duration' => $request->duration,
            'point' => $request->point,
            'score' => $request->score,
            'supervisor_rating' => $request->supervisor_rating,
            'hr_rating' => $request->hr_rating,
            'ceo_rating' => $request->ceo_rating,
            'kpi_percentage' => $request->kpi_percentage,
            'priority' => $request->priority,
            'supervisor_review' => $request->supervisor_review,
            'hr_review' => $request->hr_review,
            'ceo_review' => $request->ceo_review,
            'comment' => $request->comment,
            'extended_note' => $request->extended_note,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.employee-task.index')->with('success', 'Data created successfully.');
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
        $item = EmployeeTask::findOrFail($id);
        return view('admin.pages.employee-task.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Step 1: Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'supervisors' => 'nullable|array',
            'supervisors.*' => 'exists:admins,id',
            'start_date' => 'nullable|date',
            'create_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'extended_date' => 'nullable|date',
            'month' => 'nullable|string',
            'fiscal_year' => 'nullable|string',
            'quarter' => 'nullable|string|in:q1,q2,q3,q4',
            'project_status' => 'nullable|string',
            'duration' => 'nullable|numeric|min:0',
            'point' => 'nullable|numeric|min:0',
            'score' => 'nullable|numeric|min:0',
            'supervisor_rating' => 'nullable|numeric|between:0,100',
            'hr_rating' => 'nullable|numeric|between:0,100',
            'ceo_rating' => 'nullable|numeric|between:0,100',
            'kpi_percentage' => 'nullable|numeric|between:0,100',
            'priority' => 'nullable|numeric|min:0',
            'supervisor_review' => 'nullable|string',
            'hr_review' => 'nullable|string',
            'ceo_review' => 'nullable|string',
            'comment' => 'nullable|string',
            'extended_note' => 'nullable|string',
            'description' => 'nullable|string',
            'review' => 'nullable|string',
            'status' => 'required|string|in:active,inactive',
        ]);

        // Step 2: Find the item in the database
        $item = EmployeeTask::findOrFail($id);

        $item->update([
            'name' => $request->name,
            'supervisors' => json_encode($request->supervisors),
            //'employee_id' => Auth::guard('admin')->user()->id,
            'start_date' => $request->start_date,
            'create_date' => $request->create_date,
            'end_date' => $request->end_date,
            'extended_date' => $request->extended_date,
            'month' => $request->month,
            'fiscal_year' => $request->fiscal_year,
            'quarter' => $request->quarter,
            'duration' => $request->duration,
            'point' => $request->point,
            'score' => $request->score,
            'supervisor_rating' => $request->supervisor_rating,
            'hr_rating' => $request->hr_rating,
            'ceo_rating' => $request->ceo_rating,
            'kpi_percentage' => $request->kpi_percentage,
            'priority' => $request->priority,
            'supervisor_review' => $request->supervisor_review,
            'hr_review' => $request->hr_review,
            'ceo_review' => $request->ceo_review,
            'comment' => $request->comment,
            'extended_note' => $request->extended_note,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.employee-task.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EmployeeTask::findOrFail($id)->delete();

    }

    public function updateStatusTask(Request $request, $id)
    {
        $offer = EmployeeTask::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

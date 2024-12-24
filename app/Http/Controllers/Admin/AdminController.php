<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function dashboard()
    {
        $attendances = json_decode(Http::get('http://backoffice.ngenitltd.com/api/resource/attendance'), true);
        // Get current and last month dates
        $currentMonth = Carbon::now()->format('Y-m'); // e.g., 2024-12
        $lastMonth = Carbon::now()->subMonth()->format('Y-m'); // e.g., 2024-11

        // Define the user_id you want to query
        $user_id = 114;

        // Filter attendance records
        $filteredAttendances = collect($attendances)
            ->filter(function ($attendance) use ($user_id, $currentMonth, $lastMonth) {
                // Ensure that the $attendance is an array and contains the necessary keys
                if (is_array($attendance) && isset($attendance['user_id'], $attendance['date'])) {
                    $attendanceDate = Carbon::parse($attendance['date']);
                    $isCurrentOrLastMonth = $attendanceDate->format('Y-m') === $currentMonth || $attendanceDate->format('Y-m') === $lastMonth;

                    // Log the decision-making process for debugging
                    Log::info("Filtering attendance for user {$attendance['user_id']} on date {$attendance['date']} - Matches current or last month? " . ($isCurrentOrLastMonth ? 'Yes' : 'No'));

                    return $attendance['user_id'] === $user_id && $isCurrentOrLastMonth;
                }

                return false;
            })
            ->values(); // Reset keys after filtering

        // dd($filteredAttendances);
        // dd($attendances);
        return view('admin/dashboard');
    }
}

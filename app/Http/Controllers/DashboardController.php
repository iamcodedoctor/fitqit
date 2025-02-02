<?php

namespace App\Http\Controllers;

use App\Models\SmokeFreeLog;
use App\Models\CigaretteSmoked;
use App\Models\Exercise;
use App\Models\StressLevel;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Fetch smoke-free logs
        $smokeFreeLogs = SmokeFreeLog::where('user_id', $user->id)->get();
        $totalSmokeFreeDays = $smokeFreeLogs->count();
        $totalMoneySaved = $smokeFreeLogs->sum('money_saved');

        // Fetch exercise logs
        $exercises = Exercise::where('user_id', $user->id)
                             ->where('logged_at', '>=', Carbon::now()->startOfWeek())
                             ->get();

        // Fetch stress logs
        $stressLevels = StressLevel::where('user_id', $user->id)
                               ->where('logged_at', '>=', Carbon::now()->startOfWeek())
                               ->get();

        // Cigarettes smoked this week
        $cigarettesSmoked = CigaretteSmoked::where('user_id', $user->id)
                                           ->where('smoked_at', '>=', Carbon::now()->startOfWeek())
                                           ->get();

        return view('dashboard', compact('totalSmokeFreeDays', 'totalMoneySaved', 'exercises', 'stressLevels', 'cigarettesSmoked'));
    }
}

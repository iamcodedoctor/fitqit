<?php

namespace App\Http\Controllers;

use App\Models\CigaretteSmoked;
use App\Models\Exercise;
use App\Models\SmokeFreeLog;
use App\Models\StressLevel;
use Illuminate\Http\Request;

class LogController extends Controller
{

    public function index()
    {
        return view('logs.index');
    }
    /**
     * Show the cigarette log form.
     */
    public function showCigaretteLogForm()
    {
        return view('logs.cigarette');
    }

    /**
     * Store the cigarette log.
     */
    public function storeCigaretteLog(Request $request)
    {
        // Validate the request
        $request->validate([
            'cigarettes_count' => 'required|integer|min:1',
            'cost' => 'required|numeric|min:0',
            'smoked_at' => 'required|date',
        ]);

        // Get the logged-in user
        $user = $request->user();

        // Store the log if the user is authenticated
        if ($user) {
            CigaretteSmoked::create([
                'user_id' => $user->id,
                'cigarettes_count' => $request->cigarettes_count,
                'cost' => $request->cost,
                'smoked_at' => $request->smoked_at,
            ]);

            return redirect()->route('dashboard')->with('success', 'Cigarette log added successfully.');
        }

        return redirect()->route('login')->with('error', 'You must be logged in to log cigarettes.');
    }

    /**
     * Show the exercise log form.
     */
    public function showExerciseLogForm()
    {
        return view('logs.exercise');
    }

    /**
     * Store the exercise log.
     */
    public function storeExerciseLog(Request $request)
    {
        // Validate the request
        $request->validate([
            'exercise_type' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'calories_burned' => 'required|numeric|min:1',
            'logged_at' => 'required|date',
        ]);

        // Get the logged-in user
        $user = $request->user();

        // Store the log if the user is authenticated
        if ($user) {
            Exercise::create([
                'user_id' => $user->id,
                'exercise_type' => $request->exercise_type,
                'duration' => $request->duration,
                'calories_burned' => $request->calories_burned,
                'logged_at' => $request->logged_at,
            ]);

            return redirect()->route('dashboard')->with('success', 'Exercise log added successfully.');
        }

        return redirect()->route('login')->with('error', 'You must be logged in to log exercises.');
    }

    /**
     * Show the stress log form.
     */
    public function showStressLogForm()
    {
        return view('logs.stress');
    }

    /**
     * Store the stress log.
     */
    public function storeStressLog(Request $request)
    {
        // Validate the request
        $request->validate([
            'stress_level' => 'required|integer|min:1|max:10',
            'logged_at' => 'required|date',
        ]);

        // Get the logged-in user
        $user = $request->user();

        // Store the log if the user is authenticated
        if ($user) {
            StressLevel::create([
                'user_id' => $user->id,
                'stress_level' => $request->stress_level,
                'logged_at' => $request->logged_at,
            ]);

            return redirect()->route('dashboard')->with('success', 'Stress log added successfully.');
        }

        return redirect()->route('login')->with('error', 'You must be logged in to log stress levels.');
    }

    // Show the SmokeFreeLog form
    public function showSmokeFreeLogForm()
    {
        return view('logs.smoke-free');
    }

    // Store the SmokeFreeLog data
    public function storeSmokeFreeLog(Request $request)
    {
        $request->validate([

            'saved_money' => 'required|numeric|min:0',
            'logged_at' => 'required|date',
        ]);


        SmokeFreeLog::create([
            'user_id' => $request->user()->id,
            'logged_at' => $request->logged_at,
            'money_saved' => $request->saved_money,
        ]);

        return redirect()->route('dashboard')->with('success', 'Smoke-free log added successfully.');
    }
}

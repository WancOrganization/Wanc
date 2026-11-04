<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\GetInTouch;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): View
    {
        $feedbacks = Feedback::where('active', 1)->get();
        return view('index', compact('feedbacks'));
    }

    public function get_in_touch_store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        GetInTouch::create($validated);
        return response()->json(['data' => 'success']);
    }

    public function feedback_store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'designation' => 'nullable|string|max:255',
        ]);

        Feedback::create($validated);
        return response()->json(['data' => 'success']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\GetInTouch;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        $totalFeedback = Feedback::count();
        $activeFeedback = Feedback::where('active', true)->count();
        $contactMessages = GetInTouch::count();

        return view('Admin.dashboard', compact('totalFeedback', 'activeFeedback', 'contactMessages'));
    }
}

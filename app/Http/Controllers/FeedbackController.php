<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(): View
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();
        return view('Admin.Feedback.feedback-index', compact('feedbacks'));
    }

    public function create(): View
    {
        return view('Admin.Feedback.feedback-create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validateData($request);
        Feedback::create($data);
        return redirect('/admin/feedback')->with('message', 'Success');
    }

    public function show(Feedback $feedback): View
    {
        return view('Admin.Feedback.feedback-show', compact('feedback'));
    }

    public function edit(Feedback $feedback): View
    {
        return view('Admin.Feedback.feedback-edit', compact('feedback'));
    }

    public function update(Request $request, Feedback $feedback): RedirectResponse
    {
        $data = $this->validateData($request);
        $feedback->update($data);
        return redirect('/admin/feedback')->with('message', 'Success');
    }

    public function destroy(Feedback $feedback): RedirectResponse
    {
        $feedback->delete();
        return redirect('/admin/feedback')->with('message', 'Success');
    }

    public function validateData(Request $request): array
    {
        return $request->validate([
            'name' => 'required',
            'description' => 'required',
            'designation' => '',
        ]);
    }

    public function feedback_toggle(Request $request): JsonResponse
    {
        $feedback = Feedback::where('id', $request->feedback_id)->first();
        $feedback->active = !$feedback->active;
        $feedback->save();
        return response()->json(['data' => 'success']);
    }
}

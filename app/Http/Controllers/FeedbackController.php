<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
 */
    public function index()
    {
        $feedbacks = Feedback::orderBy('created_at','desc')->get();
        return view('Admin.Feedback.feedback-index',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('Admin.Feedback.feedback-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $this->validateData($request);
        Feedback::create($data);
        return redirect('/admin/feedback')->with('message', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Feedback $feedback)
    {
        return view('Admin.Feedback.feedback-show',compact('feedback'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Feedback $feedback)
    {
        return view('Admin.Feedback.feedback-edit',compact('feedback'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Feedback $feedback)
    {
        $data = $this->validateData($request);
        $feedback->update($data);
        return redirect('/admin/feedback')->with('message', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect('/admin/feedback')->with('message', 'Success');
    }

    public function validateData(Request $request): array
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'designation' => '',
        ]);
        return $data;
    }

    public function feedback_toggle(Request $request)
    {
        $feedback = Feedback::where('id',$request->feedback_id)->first();
        if($feedback->active){
            $feedback->active = 0;
        }
        else{
            $feedback->active = 1;
        }
        $feedback->save();
        return response()->json(['data' => 'success']);
    }
}

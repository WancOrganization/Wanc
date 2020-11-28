<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\GetInTouch;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::where('active',1)->get();
        return view('index',compact('feedbacks'));
    }

    public function get_in_touch_store(Request $request)
    {
        GetInTouch::create($request->all());
        return response()->json(['data' => 'success']);
    }

    public function feedback_store(Request $request){
        Feedback::create($request->all());
        return response()->json(['data' => 'success']);
    }
}

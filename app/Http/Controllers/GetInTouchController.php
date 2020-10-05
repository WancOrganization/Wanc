<?php

namespace App\Http\Controllers;

use App\Models\GetInTouch;
use Illuminate\Http\Request;

class GetInTouchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $getInTouches = GetInTouch::orderBy('created_at','desc')->get();
        return view('Admin.GetInTouch.get-in-touch-index',compact('getInTouches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.GetInTouch.get-in-touch-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $this->validateData($request);
        GetInTouch::create($data);
        return redirect('/admin/get-in-touch')->with('message', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\GetInTouch $getInTouch
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(GetInTouch $getInTouch)
    {
        return view('Admin.GetInTouch.get-in-touch-show',compact('getInTouch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\GetInTouch $getInTouch
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(GetInTouch $getInTouch)
    {
        return view('Admin.GetInTouch.get-in-touch-edit',compact('getInTouch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GetInTouch $getInTouch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, GetInTouch $getInTouch)
    {
        $data = $this->validateData($request);
        $getInTouch->update($data);
        return redirect('/admin/get-in-touch')->with('message', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\GetInTouch $getInTouch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(GetInTouch $getInTouch)
    {
        $getInTouch->delete();
        return redirect('/admin/get-in-touch')->with('message', 'Success');
    }

    public function validateData(Request $request): array
    {
        $data = $request->validate([
            'name' => 'required',
            'message' => 'required',
            'subject' => 'required',
            'mobile_number' => 'required',
        ]);
        return $data;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\GetInTouch;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GetInTouchController extends Controller
{
    public function index(): View
    {
        $getInTouches = GetInTouch::orderBy('created_at', 'desc')->get();
        return view('Admin.GetInTouch.get-in-touch-index', compact('getInTouches'));
    }

    public function create(): View
    {
        return view('Admin.GetInTouch.get-in-touch-create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validateData($request);
        GetInTouch::create($data);
        return redirect('/admin/get-in-touch')->with('message', 'Success');
    }

    public function show(GetInTouch $getInTouch): View
    {
        return view('Admin.GetInTouch.get-in-touch-show', compact('getInTouch'));
    }

    public function edit(GetInTouch $getInTouch): View
    {
        return view('Admin.GetInTouch.get-in-touch-edit', compact('getInTouch'));
    }

    public function update(Request $request, GetInTouch $getInTouch): RedirectResponse
    {
        $data = $this->validateData($request);
        $getInTouch->update($data);
        return redirect('/admin/get-in-touch')->with('message', 'Success');
    }

    public function destroy(GetInTouch $getInTouch): RedirectResponse
    {
        $getInTouch->delete();
        return redirect('/admin/get-in-touch')->with('message', 'Success');
    }

    public function validateData(Request $request): array
    {
        return $request->validate([
            'name' => 'required',
            'message' => 'required',
            'subject' => 'required',
            'mobile_number' => 'required',
        ]);
    }
}

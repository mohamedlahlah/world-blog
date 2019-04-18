<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;    
class HomeController extends BackendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backendblog.home.index');
    }
public function edit(Request $request)
    {
        $user = $request->user();

        return view('backendblog.home.edit', compact('user'));
    }

    public function update(Requests\UserUpdateRequest $request)
    {
        $user = $request->user();
        $user->update($request->all());

        return redirect()->back()->with("message", "Account was update successfully!");
    }


}

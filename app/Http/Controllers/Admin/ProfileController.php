<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index():View{
        return view('admin.profile.index');
    }

    public function update(ProfileRequest $request): RedirectResponse{

        dd($request->all());
        return redirect()->back();
    }
}

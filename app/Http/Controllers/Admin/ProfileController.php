<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileRequest;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{
    use FileUploadTrait;
    public function index():View{
        $user = Auth::user();
        return view('admin.profile.index',compact('user'));
    }

    public function update(ProfileRequest $request): RedirectResponse{
        $avatarPath = $this->uploadImage($request,'avatar',$request->oldAvatar);
        $user = Auth::user();

        $user->avatar = !empty($avatarPath) ? $avatarPath : $request->oldAvatar;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();

        toastr()->success('Profile updated successfully!');

        return redirect()->back();
    }

    public function reset_password(Request $request):RedirectResponse{
        $request->validate([
            'current_password' => ['required','current_password'],
            'password' => ['required','min:6', 'confirmed']
        ]);

        $user =Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();

        toastr()->success('Password reset successfully!');

        return redirect()->back();
    }
}

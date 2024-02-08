<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }
    public function edit()
    {
        $profile = User::find(auth()->user()->id);
        return view('profile.edit', compact('profile'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required | max:255',
            'bio' => 'max:255',
            'profilePicture' => 'image|mimes:jpeg,png,jpg',
        ]);
        $profile = User::find(auth()->user()->id);
        // file upload
        if ($request->file('profilePicture')) {
            $imagePath = $request->file('profilePicture')->store('profilePictures', 'public');
            //remove old image
            if ($profile->profile_picture_path != 'profilePictures/avatar.jpg') {
                Storage::delete('public/' . $profile->profile_picture_path);
            }
        }
        $profile->update([
            'name' => $request->name,
            'bio' => $request->bio,
            'profile_picture_path' => $imagePath ?? $profile->profile_picture_path,
        ]);
        return redirect()->back()->with('status', 'Profile updated successfully');
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{




    function  edit_profile()
    {
        return view('dashboard.profile.edit');
    }



    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        toast('updated successfully', 'success');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //uploading profile picture/avatar
    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            //success message
            $request->session()->flash('message', 'Avatar Updated');
            return redirect()->back();
        }
        $request->session()->flash('error', 'Avatar updating failed');
        return redirect()->back();
    }

}

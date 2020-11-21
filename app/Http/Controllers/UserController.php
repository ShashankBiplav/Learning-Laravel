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
            //success message in session
//            $request->session()->flash('message', 'Avatar Updated');
            return redirect()->back()->with('message', 'Avatar Updated');
        }
        //error message in session
//        $request->session()->flash('error', 'Avatar updating failed');
        return redirect()->back()->with('error', 'Avatar updating failed');
    }

}

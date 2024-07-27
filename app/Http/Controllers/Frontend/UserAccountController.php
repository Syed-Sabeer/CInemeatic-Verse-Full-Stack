<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Approval;

class UserAccountController extends Controller
{
    public function index()
    {
        return view('frontend.user-account');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'detail' => 'required|string|max:255',
            // 'privacy' => 'required|string|max:255',
            // 'post' => 'nullable|date',
        ]);

        Approval::create([
            'detail' => $request->input('detail'),
            'privacy' => $request->input('privacy'),
            'post' => $request->input('post'),
        ]);

        return redirect()->back()->with('success', 'Post details uploaded successfully.');
    }
}

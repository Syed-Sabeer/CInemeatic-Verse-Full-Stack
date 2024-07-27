<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cast;
use Illuminate\Support\Facades\Storage;

class AdminCastController extends Controller
{
    public function index() {
        $casts = Cast::all();
        return view('backend.cast', compact('casts'));
    }


    public function store(Request $request) {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'picture' => 'nullable|image|max:2048'
        ]);

        $cast = new Cast;
        $cast->name = $request->fullname;
        $cast->dob = $request->dob;

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('cast_pictures', 'public');
            $cast->picture = $path;
        }

        $cast->save();

        return redirect()->route('admin.cast.index')->with('success', 'Cast added successfully!');
    }

    public function update(Request $request) {
        $request->validate([
            'cast_id' => 'required|integer|exists:cast,id',
            'fullname' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'picture' => 'nullable|image|max:2048'
        ]);

        $cast = Cast::find($request->cast_id);
        $cast->name = $request->fullname;
        $cast->dob = $request->dob;

        if ($request->hasFile('picture')) {
            // Delete the old picture
            if ($cast->picture) {
                Storage::disk('public')->delete($cast->picture);
            }
            $path = $request->file('picture')->store('cast_pictures', 'public');
            $cast->picture = $path;
        }

        $cast->save();

        return redirect()->route('admin.cast.index')->with('success', 'Cast updated successfully!');
    }
    public function show($id) {
        $cast = Cast::find($id);
        return response()->json([
            'id' => $cast->id,
            'name' => $cast->name,
            'dob' => $cast->dob,
            'picture' => $cast->picture,
        ]);
    }
    public function destroy($id)
{
    $cast = Cast::findOrFail($id);
    $cast->delete();

    return response()->json(['success' => true]);
}



}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie; // Ensure you have a Movie model

class AdminMoviesController extends Controller
{
    public function index()
    {
        // Fetch all movies and pass them to the view
        $movies = Movie::all();
        return view('backend.movies', compact('movies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'title' => 'required|string|max:255',
            // 'description' => 'nullable|string',
            // 'poster_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'release_year' => 'required|integer',
            // 'cast' => 'required|string',
            // 'crew' => 'required|string',
            // 'rated' => 'required|string|max:10',
            // 'imdb' => 'required|numeric|min:0|max:10',
            // 'runtime' => 'required|integer',
            // 'tagline' => 'nullable|string|max:255',
            // 'genre' => 'required|string|max:255',
            // 'trailer_link' => 'required|url',
            // 'download_link' => 'required|url',
            // 'watch_link' => 'required|url',
        ]);

        // Check if file is uploaded
        if ($request->hasFile('poster_img')) {
            $poster_img = $request->file('poster_img')->store('posters', 'public');
        } else {
            return redirect()->back()->withErrors(['poster_img' => 'Poster image is required.']);
        }

        // Create a new movie record
        Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'poster_img' => $poster_img,
            'release_year' => $request->release_year,
            'cast' => $request->cast,
            'crew' => $request->crew,
            'rated' => $request->rated,
            'imdb' => $request->imdb,
            'runtime' => $request->runtime,
            'tagline' => $request->tagline,
            'genre' => $request->genre,
            'trailer_link' => $request->trailer_link,
            'download_link' => $request->download_link,
            'watch_link' => $request->watch_link,
        ]);

        // Redirect with a success message
        return redirect()->route('admin.movies.index')->with('success', 'Movie added successfully.');
    }


}

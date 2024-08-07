<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MovieController extends Controller
{
    public function index()
    {
        // Retrieve movies from session
        $movies = Session()->get('movies', []);

        return view('movies.index', compact('movies'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|max:255',
        ]);

        // Retrieve movies from session or initialize an empty array
        $movies = Session()->get('movies', []);

        // Add new task to the movies array
        $movies[] = ['title' => $request->title, 'completed' => false];

        // Store the updated movies array back to the session
        Session()->put('movies', $movies);

        return redirect('/');
    }

    public function edit(Request $request, $id){

        $movies = Session::get('movies', []);
        if (!isset($movies[$id])) {
            return redirect('/');
        }
        $task = $movies[$id];
        return view('movies.edit', compact('task', 'id'));


    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $movies = Session()->get('movies', []);


        if (isset($movies[$id])) {
            $movies[$id]['title'] = $request->title;
        }


        Session()->put('movies', $movies);

        return redirect('/');
    }

    public function destroy($id)
    {
        // Retrieve movies from session
        $movies = Session()->get('movies', []);

        // Remove the task
        if (isset($movies[$id])) {
            unset($movies[$id]);
        }

        // Store the updated movies array back to the session
        Session()->put('movies', $movies);

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Discipline;


class DisciplineController extends Controller
{
    public function index()
    {
        $disciplines = Discipline::latest()->paginate(10);

        return view('disciplines.index', compact('disciplines'));
    }

    public function create()
    {
        return view('disciplines.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:disciplines|max:255',
        ]);

        $video = Discipline::create([
            'name' => $request->input('name'),
        ]);

        return redirect('disciplines')->with('success', __('general.discipline_create_success'));;
    }

    public function edit(Discipline $discipline)
    {
        return view('disciplines.edit', compact('discipline'));
    }

    public function update(Request $request, Discipline $discipline)
    {
        $request->validate([
            'name' => 'required|unique:disciplines|max:255',
        ]);
        $discipline->update($request->all());

        return redirect()->route('disciplines')->with('success', __('general.discipline_update_success'));
    }
}

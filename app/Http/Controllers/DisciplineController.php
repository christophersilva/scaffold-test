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

        return view(
            'disciplines.index',
            compact('disciplines')
        )->with('i', (request()->input('page', 1) - 1) * 10);;
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

    public function edit($id)
    {
        $discipline = Discipline::find($id);
        return view('disciplines.edit', compact('discipline'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:disciplines|max:255',
        ]);
        $discipline = Discipline::find($id);
        $discipline->update($request->all());

        return redirect()->route('disciplines')->with('success', __('general.discipline_update_success'));
    }
}

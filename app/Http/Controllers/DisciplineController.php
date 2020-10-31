<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Discipline;


class DisciplineController extends Controller
{
    public function index()
    {
        $disciplines = Discipline::all();
        return view(
            'disciplines.index',
            compact('disciplines')
        );
    }

    public function show($id)
    {
        $gender = Gender::find($id);

        return ["gender" => $gender];
    }

    public function destroy($id)
    {
        $gender = Gender::find($id);
        $gender->delete();
    }
}

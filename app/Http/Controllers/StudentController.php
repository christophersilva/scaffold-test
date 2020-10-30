<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('kind', 'student')->get();
        return view(
            'students.index',
            compact('students')
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class VideoController extends Controller
{
    public function index()
    {
        return ["videos" => []];
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

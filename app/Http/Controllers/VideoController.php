<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;


class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view(
            'videos.index',
            compact('videos')
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

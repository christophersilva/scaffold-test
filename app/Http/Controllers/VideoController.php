<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Discipline;
use Illuminate\Support\Facades\Auth;


class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::with('discipline')->latest()->paginate(10);;
        return view(
            'videos.index',
            compact('videos')
        );
    }

    public function create()
    {
        $disciplines = Discipline::all();
        return view(
            'videos.create',
            compact('disciplines')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'link' => 'required|max:255|unique:videos',
            'summary' => 'required|max:255',
            'discipline_id' => 'required',
        ]);

        $video = Video::create([
            'name' => $request->input('name'),
            'link' => $request->input('link'),
            'summary' => $request->input('summary'),
            'discipline_id' => $request->input('discipline_id'),
            'user_id' => Auth::user()->id
        ]);

        return redirect('videos')->with('success', __('general.video_create_success'));
    }

    public function edit(Video $video)
    {
        $disciplines = Discipline::all();
        return view('videos.edit', compact('video', 'disciplines'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'name' => 'required|max:255',
            'link' => 'required|max:255|unique:videos',
            'summary' => 'required|max:255',
            'discipline_id' => 'required',
        ]);

        $video->update($request->all());

        return redirect()->route('videos')->with('success', __('general.video_update_success'));
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();


    }
}

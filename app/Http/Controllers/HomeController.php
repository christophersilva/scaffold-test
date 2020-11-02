<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Video;
use App\Models\Discipline;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $videos = Video::with('discipline', 'user')->paginate(2);
        return view(
            'home',
            compact('videos')
        );
    }
}

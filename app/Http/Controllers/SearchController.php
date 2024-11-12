<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
       $jobs = Job::where('title', 'like', '%' . request('q') . '%')->get();

        return view('jobs.results', ['jobs' => $jobs]);
    }
}

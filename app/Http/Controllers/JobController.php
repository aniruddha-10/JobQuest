<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

use function Laravel\Prompts\search;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $filters = request()->only(
            'search',
            'min_salary',
            'max_salary',
            'experience',
            'category'
        );

        return view('job.index', 
        ['jobs' => Job::with('employer')->latest()->filter($filters)->get()]); 
    }
    public function show(Job $job)
    {
        
        return view('job.show',['job' => $job->load('employer.jobs')]);
    }
}
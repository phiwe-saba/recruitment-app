<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Department;

class JobController extends Controller
{
    /*public function __construct(){
        $this->middleware('auth');
    }*/
    
    public function index()
    {
        $jobs = Job::all();
        return view('jobs/index', compact('jobs'));
    }

    public function dashboard()
    {
        $jobs = Job::all();
        return view('jobs/dashboard', compact('jobs'));
    }

    public function create()
    {
        
        $departments = Department::all();

        return view('jobs/create', compact('departments'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'job_type' => 'required',
            'location' => 'required',
            'department_id' => 'required'
        ]);

        Job::create($data);

        return redirect('jobs/index');
    }

    public function show(Job $job)
    {
        return view('jobs/show', compact('job'));
    }

    public function edit(Job $job)
    {

        $departments = Department::all();

        return view('jobs/edit', compact('job', 'departments'));
    }

    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => 'required',
            'job_type' => 'required',
            'location' => 'required',
            'department_id' => 'department_id'
        ]);

        $job->update($request->all());

        return redirect()->route('jobs/index');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs/index');
    }
    
}

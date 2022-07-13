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
    
    public function index(){
        $jobs = Job::all();
        return view('jobs/index', compact('jobs'));
    }

    public function create(){
        
        $departments = Department::all();

        return view('jobs/create', compact('departments'));
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'job_type' => 'required',
            'location' => 'required',
            'department_id' => 'required'
        ]);

        Job::create($data);

        return redirect('jobs/index');
    }

    public function show(Job $job){
        return view('jobs/show', compact('job'));
    }

    public function edit(Job $job){

        $departments = Department::all();

        return view('jobs/edit', compact('job', 'departments'));
    }

    /*public function update(Job $job){
        $job->update($this->validateRequest());

        return redirect('jobs/'. $customer->id);
    }*/

    public function destroy(Job $job){
        $this->authorize('delete', $job);

        $job->delete();

        return redirect('jobs');
    }
    
}

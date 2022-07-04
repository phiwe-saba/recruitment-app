<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Department;

class JobController extends Controller
{
    public function list(){
        $departments = Department::all();

        return view('jobs/job', compact('departments'));
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'job_type' => 'required',
            'location' => 'required',
            'department_id' => 'required'
        ]);

        Job::create($data);

        return back();
    }
}

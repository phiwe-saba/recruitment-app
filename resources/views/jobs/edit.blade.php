@extends('layouts\admin')

@section('title', 'Job list')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit job {{ $job->title }}</h1>
            </div>
            <div class="pull-right">
                <a href="{{ route('jobs/index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('jobs/update', $job->id) }}" method="POST">
                    @csrf
                    @method('PUT');
                    <div class="form-group">
                        <label for="title">Title:</label><br>
                        <input type="text" name="title" value="{{ $job->title }}" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="dep_name">Department Name:</label><br>
                        <select name="department_id" value="$job->$department->id }}" class="form-control">
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}"> {{ $department->department_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="job_type">Job Type:</label><br>
                        <select name="job_type" value="$job->job_type" class="form-control">
                            <option value="" disabled>Select job type</option>
                            <option value="Contract" {{ 'selected' }}>Contract</option>
                            <option value="Permanant" {{ 'selected' }}>Permanant</option>
                            <option value="Temporary" {{ 'selected' }}>Temporary</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label><br>
                        <select name="location" value="$job->location" class="form-control">
                            <option value="" disabled>Select location</option>
                            <option value="Gauteng" {{ 'selected' }}>Gauteng</option>
                            <option value="Port Elizabeth" {{ 'selected' }}>Port Elizabeth</option>
                            <option value="Durban" {{ 'selected' }}>Durban</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Apply</button>
                </form>
            </div>
        </div>
    </div>
    

@endsection
@extends('layouts\app')

@section('title', 'Add new job')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Add new job</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            
        </div>
    </div>
    
    <form action="/jobs/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Title:</label><br>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror">
        
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="dep_name">Department Name:</label><br>
            <select name="department_id" value="{{ old('first_name') }}" class="form-control">
                <option value="" disabled>Select location</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}"> {{ $department->department_name }}</option>
                @endforeach
            </select>

            @error('department_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="job_type">Job Type:</label><br>
            <select name="job_type" value="{{ old('first_name') }}" class="form-control">
                <option value="" disabled>Select job type</option>
                <option value="Contract" {{ 'selected' }}>Contract</option>
                <option value="Permanant" {{ 'selected' }}>Permanant</option>
                <option value="Temporary" {{ 'selected' }}>Temporary</option>
            </select>

            @error('job_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="location">Location:</label><br>
            <select name="location" value="{{ old('first_name') }}" class="form-control">
                <option value="" disabled>Select location</option>
                <option value="Gauteng" {{ 'selected' }}>Gauteng</option>
                <option value="Port Elizabeth" {{ 'selected' }}>Port Elizabeth</option>
                <option value="Durban" {{ 'selected' }}>Durban</option>
            </select>

            @error('location')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Apply</button>
        </div>
        
    </form>
</div>


@endsection



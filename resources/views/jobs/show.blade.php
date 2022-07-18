@extends('layouts\admin')

@section('title', 'Job list')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <h1>Job list</h1>
            </div>
            <div class="pull-left">
                <a href="{{ route('jobs/index') }}">Back</a>
            </div>
            
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <strong>#:</strong>
            {{ $job->id }}
        </div>

        <div class="form-group">
            <strong>Title:</strong>
            {{ $job->title }}
        </div>

        <div class="form-group">
            <strong>Department name:</strong>
            {{ $job->department->department_name}}
        </div>

        <div class="form-group">
            <strong>Job type:</strong>
            {{ $job->job_type }}
        </div>

        <div class="form-group">
            <strong>Location:</strong>
            {{ $job->location }}
        </div>

        <div class="form-group">
            <strong>Date:</strong>
            {{ $job->created_at }}
        </div>
    </div>

    <!--@foreach($jobs as $job)
        <div class="row">
            <div class="col-2">{{ $job->id }}</div>
            <div class="col-2">{{ $job->title }}</div>
            <div class="col-2">{{ $job->department->department_name}}</div>
            <div class="col-2">{{ $job->job_type }}</div>
            <div class="col-2">{{ $job->location }}</div>
            <div class="col-2">{{ $job->created_at }}</div>
        </div>
    @endforeach-->
</div>


@endsection
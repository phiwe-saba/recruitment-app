@extends('layouts\admin')

@section('title', 'Job list')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Job list</h1>
            <p><a href="{{ route('jobs/edit', ['job' => $job]) }}">Edit</a></p>

            <form action="{{ route('jobs/destroy', ['job' => $job]) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>

    <!--<div class="row">
        <div class="col-12">
            <p><a href="{{ route('jobs/create') }}">Add new job</a></p>
        </div>
    </div>-->

    @foreach($jobs as $job)
        <div class="row">
            <div class="col-2">{{ $job->id }}</div>
            <div class="col-2">{{ $job->title }}</div>
            <div class="col-2">{{ $job->department->department_name}}</div>
            <div class="col-2">{{ $job->job_type }}</div>
            <div class="col-2">{{ $job->location }}</div>
            <div class="col-2">{{ $job->created_at }}</div>
        </div>
    @endforeach
</div>


@endsection
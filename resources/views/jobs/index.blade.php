@extends('layouts\admin')

@section('title', 'Job vacancies')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Job vacancies</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><a href="{{ route('jobs/create') }}">Add new job</a></p>
        </div>
    </div>

    @foreach($jobs as $job)
        <div class="card">
            <div class="card-body">
                <a href="/jobs/{{$job->id}}">
                    <div class="title">
                        <h3>{{$job->title}}</h3>
                    </div>
                    <div class="department">
                        <p>{{$job->department->department_name}} | {{$job->job_type}}</p>
                    </div>
                    <div class="location">
                        <p>{{$job->location}} | {{$job->created_at}}</p>
                    </div>
                    <div class="btn btn-primary"><a href=""></a> Apply</div>
                </a>
                
            </div>
        </div>
    @endforeach
</div>


@endsection
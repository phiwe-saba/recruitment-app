

@foreach($jobs as $job)
    <div class="card mb-3">
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
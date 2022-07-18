<!--@foreach($application->users as $user)
    {{ $user->name }}
    {{ $user->surname }}
    {{ $user->email }}
    {{ $user->file_upload }}
@endforeach

@foreach($application->jobs as $job)
    {{ $job->title }}
    {{ $job->job_type }}
    {{ $job->location }}
    {{ $job->department->department_name }}
@endforeach-->
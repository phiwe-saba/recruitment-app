@extends('layouts\applicant')

@section('title', 'Application')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Apply for job</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            
        </div>
    </div>

    <form action="/applicants" method="POST">
        @csrf
        <div class="mb-3">
            <label for="first_name">First name:</label><br>
        <input type="text" name="first_name" value="{{ old('first_name') ?? $applicant->first_name }}" class="form-control">
            <div>{{ $errors->first('first_name') }}</div>
        </div>
        
        <div class="mb-3">
            <label for="last_name">First name:</label><br>
            <input type="text" name="last_name" value="{{ old('last_name') ?? $applicant->last_name }}" class="form-control">
            <div>{{ $errors->first('last_name') }}</div>
        </div>

        <div class="mb-3">
            <label for="id_number">Identity number:</label><br>
            <input type="text" name="id_number" value="{{ old('id_number') ?? $applicant->id_number }}" class="form-control">
            <div>{{ $errors->first('last_name') }}</div>
        </div>

        <div class="mb-3">
            <label for="email">Email:</label><br>
            <input type="text" name="email" value="{{ old('email') ?? $applicant->email }}" class="form-control">
            <div>{{ $errors->first('email') }}</div>
        </div>

        <div class="mb-3">
            <label for="cell_number">Cell number:</label><br>
            <input type="text" name="cell_number" value="{{ old('cell_number') ?? $applicant->cell_number }}" class="form-control">
            <div>{{ $errors->first('cell_number') }}</div>
        </div>

        <div class="mb-3">
            <label for="gender">Gender:</label><br>
            <select name="gender" value="{{ old('gender') ?? $applicant->gender }}" class="form-control">
                <option value="" disabled>Select job gender</option>
                <option value="Female" {{ 'selected' }}>Female</option>
                <option value="Male" {{ 'selected' }}>Male</option>
                <option value="Other" {{ 'selected' }}>Other</option>
            </select>
            <div>{{ $errors->first('gender') }}</div>
        </div>

        <div class="mb-3">
            <label for="file_upload">Upload CV:</label>
            <input type="file" name="file_upload" value="{{ old('file-upload') ?? $applicant->file_upload }}" class="form-control">
            <div>{{ $errors->first('file_upload') }}</div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Apply</button>
        </div>
        
    </form>
</div>


@endsection
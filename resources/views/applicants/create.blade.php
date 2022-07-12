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

    <form action="/applicants/create" method="POST">
        @csrf
        <div class="mb-3">
            <label for="first_name">First name:</label><br>
            <input type="text" name="first_name" class="form-control">
            
        </div>
        
        <div class="mb-3">
            <label for="last_name">First name:</label><br>
            <input type="text" name="last_name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="id_number">Identity number:</label><br>
            <input type="text" name="id_number" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email">Email:</label><br>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="cell_number">Cell number:</label><br>
            <input type="text" name="cell_number" class="form-control">
        </div>

        <div class="mb-3">
            <label for="gender">Gender:</label><br>
            <select name="gender" class="form-control">
                <option value="" disabled>Select job gender</option>
                <option value="Female" {{ 'selected' }}>Female</option>
                <option value="Male" {{ 'selected' }}>Male</option>
                <option value="Other" {{ 'selected' }}>Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="file_upload">Upload CV:</label>
            <input type="file" name="file_upload" class="form-control">
        </div>

        <div>
            <input type="hidden" name="status" value="Pending">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Apply</button>
        </div>
        
    </form>
</div>


@endsection
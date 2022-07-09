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
        <div class="form-group">
            <label for="first_name">First name:</label><br>
            <input type="text" name="first_name" id="first_name" >
        </div>
        
        <div class="form-group">
            <label for="last_name">First name:</label><br>
            <input type="text" name="last_name" id="last_name" >
        </div>

        <div class="form-group">
            <label for="id_number">Identity number:</label><br>
            <input type="text" name="id_number" id="id_number" >
        </div>

        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="text" name="email" id="email" >
        </div>

        <div class="form-group">
            <label for="cell_number">Cell number:</label><br>
            <input type="text" name="cell_number" id="cell_number" >
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label><br>
            <select name="gender">
                <option value="" disabled>Select job gender</option>
                <option value="Female" {{ 'selected' }}>Female</option>
                <option value="Male" {{ 'selected' }}>Male</option>
                <option value="Other" {{ 'selected' }}>Other</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Apply</button>
    </form>
</div>


@endsection
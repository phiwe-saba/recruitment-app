<form action="job" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" >
    </div>
    
    <div class="form-group">
        <label for="dep_name">Department Name:</label><br>
        <select name="department_id" id="department_id">
            @foreach($departments as $department)
                <option value="{{ $department->id }}"> {{ $department->department_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="job_type">Job Type:</label><br>
        <select name="job_type">
            <option value="" disabled>Select job type</option>
            <option value="Contract" {{ 'selected' }}>Contract</option>
            <option value="Permanant" {{ 'selected' }}>Permanant</option>
            <option value="Temporary" {{ 'selected' }}>Temporary</option>
        </select>
    </div>

    <div class="form-group">
        <label for="location">Location:</label><br>
        <select name="location">
            <option value="" disabled>Select location</option>
            <option value="Gauteng" {{ 'selected' }}>Gauteng</option>
            <option value="Port Elizabeth" {{ 'selected' }}>Port Elizabeth</option>
            <option value="Durban" {{ 'selected' }}>Durban</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Apply</button>
</form>
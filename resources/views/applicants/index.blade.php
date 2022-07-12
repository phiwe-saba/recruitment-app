<h1>Applicant</h1>

@foreach($applicants as $applicant)
    <div class="row">
        <div class="col-2">{{ $applicant->id }}</div>
        <div class="col-2">{{ $applicant->first_name }}</div>
        <div class="col-2">{{ $applicant->last_name}}</div>
        <div class="col-2">{{ $applicant->id_number }}</div>
        <div class="col-2">{{ $applicant->email }}</div>
        <div class="col-2">{{ $applicant->cell_number }}</div>
        <div class="col-2">{{ $applicant->gender }}</div>
        <div class="col-2">{{ $applicant->file_upload }}</div>
        <div class="col-2">{{ $applicant->status }}</div>
    </div>
@endforeach
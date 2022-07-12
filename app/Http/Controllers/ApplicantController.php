<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Job;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $applicants = Applicant::all();
        return view('applicants/index', compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jobs = Job::all();

        return view('applicants/create', compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'id_number' => 'required|max:13',
            'email' => 'required',
            'cell_number' => 'required',
            'gender' => 'required',
            'file_upload' => 'file|required|max:200',
            'status' => 'nullable'
        ]);

        //Uploading file to database
        /*if($file = $request->file('file')){
            $file_upload = $file->getClientOriginalName();

            if($file->move('file_upload', $file_upload)){
                $applicant = new Applicant();
                $applicant->file_upload = $file_upload;
                $applicant->save();
                return redirect()->route('index');
            }
        }*/
        if($request->hasFile('file_upload')){
            $filenameWithExt = $request->file('file_upload')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extenxion = $request->file('file_upload')->getClientOriginalExtension();
            $fileToUpload = $filename.'_'.time().'.'.$extension;
            $path = $request->file('file_upload')->storeAs('public/file_uploads', $fileToUpload);

        }

        //Store applicant details
        $applicants = new Applicant;
        $applicants->first_name = $request->first_name;
        $applicants->last_name = $request->last_name;
        $applicants->id_number  = $request->id_number;
        $applicants->email = $request->email;
        $applicants->cell_number = $request->cell_number;
        $applicants->gender = $request->gender;
        $applicants->file_upload = $file;
        $applicants->status = $request->status;
        $applicant->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $job = Job::find($id);
        return view('applicants/show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

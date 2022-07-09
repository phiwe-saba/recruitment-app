@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>We-Recruit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body class="container">
        <div class="main-showcase">
            <div class="showcase">
                <h1>Land your next job with us!</h1>
                <div class="showcase">
                    <div class="content">
                        <p>Create | Uplaod | Apply</p>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="flex-container">
                <div class="box">
                    <img src="{{asset('images/match.jpg') }}" alt="">
                    <h3>Resume builder</h3>
                    <p>Upload your existing resume and get started in 2 mins, or build a new one from scratch. Keep all your information organized in your profile and create as many resumes as you want.</p>          
                </div>
                <div class="box">
                    <img src="{{asset('images/correct.png') }}" alt="">
                    <h3>Resume score</h3>
                    <p>Get a score for every resume you create and personalized suggestions on how to improve. Optimize your resume and submit your next job application with confidence!</p>         
                </div>
                <div class="box">
                    <img src="{{asset('images/job.webp') }}" alt="">
                    <h3>Job match</h3>
                    <p>Save jobs and internships you want to apply to and keep them organized in one place. Get a match score for every job with suggestions on what to improve in your resume.</p>     
                </div>
            </div>
        </section>

        <section>
            <div class="main-content">
                <div class="mainbody">
                    <h1>Jobs & Internships<img src="./images/content1.jpg"></h2>
                    <p>Explore over one million jobs and internships that are updated daily. Easily search, apply and start your career on We-Recruit’s job board.</p>
                    <button><a href="vacancies.html">Find vacancies.</a></button>
                </div>
        
                <div class="blogmain">
                    <h1><img src="./images/blog.png">Read our blog!</h2>
                    <p>Sign-up to our blog to be updated on the latest jobs and newsletter</p>
                    <button><a href="blog.html">Join our blog!.</a></button>
                </div>
            </div>
        </section>

        <section>
            <div class="contact">
                
            </div>
        </section>
    </body>
</html>
@endsection
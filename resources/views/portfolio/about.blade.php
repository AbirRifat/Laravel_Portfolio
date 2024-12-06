@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="bg-success bg-opacity-10 d-flex align-items-center">
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Profile Picture Section -->
            <div class="col-md-6 text-center mb-2 mb-md-0" data-aos="fade-right">
                <img src="{{ asset('img/rifat.jpg') }}" alt="Profile Picture"
                     class="rounded-circle img-fluid shadow-lg border border-3 border-primary"
                     style="width: 300px; height: 300px; object-fit: cover;">
            </div>
            <!-- About Content Section -->
            <div class="col-md-6" data-aos="fade-left">
                <h1 class="fw-bold text-primary mb-4">About Me</h1>
                <p class="lead text-secondary text-justify">
                    Hello! My name is <strong>Rifat Bin Alam</strong>, and I am a <strong>Junior Web Developer</strong>
                    with experience in backend development. I specialize in <strong>PHP</strong>, <strong>Laravel</strong>,
                    and creating user-friendly web applications.
                </p>
                <p class="text-muted text-justify">
                    I have a passion for learning new technologies and continuously improving my skills to stay updated
                    with industry trends.
                </p>
                <p class="text-muted text-justify">
                    In my free time, I enjoy coding, exploring new tools, and solving challenging problems.
                </p>
                <div class="mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg me-3 px-5 py-3 mb-2 mb-lg-0">Contact Me</a>
                    <a href="https://drive.google.com/uc?export=download&id=1TM_6W7v4sdqOPZ5JBNdj-bS2l0yPHi87" class="btn btn-success text-white btn-lg px-5 py-3">Download CV</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-success py-5 bg-opacity-10">
    <div class="container mt-5 d-flex align-items-center justify-content-between flex-wrap">
        <!-- Left Section: Welcome Message -->
        <div class="col-md-6 mb-4">
            <h1 class="fw-bold display-1 text-primary" data-aos="fade-right">Welcome!</h1>
            <h2 class="fw-bold display-5 text-dark" data-aos="fade-right" data-aos-delay="100">Rifat Bin Alam's Portfolio</h2>
            <p class="lead text-secondary mt-3" data-aos="fade-right" data-aos-delay="200">Showcasing my journey as a Web Developer</p>
            <div class="mt-4" data-aos="fade-right" data-aos-delay="300">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg me-3 px-5 py-3 mb-2 mb-lg-0">Hire Me</a>
                <a href="https://drive.google.com/uc?export=download&id=1TM_6W7v4sdqOPZ5JBNdj-bS2l0yPHi87" class="btn btn-success text-white btn-lg px-5 py-3">Download CV</a>
            </div>
        </div>
        <!-- Right Section: Image -->
        <div class="col-md-6 text-center" data-aos="fade-left">
            <img src="{{ asset('img/rifat.jpg') }}" alt="Your Image"
                class="rounded-circle img-fluid shadow-lg border border-3 border-primary"
                style="width: 400px; height: 400px; object-fit: cover;">
        </div>
    </div>
</div>
@endsection

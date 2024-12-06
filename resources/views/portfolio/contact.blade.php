@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="bg-success bg-opacity-10 py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-down">
            <h1 class="fw-bold text-primary">Contact Me</h1>
            <p class="lead text-secondary">Feel free to reach out to me through any of the following methods:</p>
        </div>

        <div class="row">
            <!-- Contact Details Section -->
            <div class="col-md-6 mb-3 mb-md-0" data-aos="fade-right" data-aos-delay="100">
                <h4 class="text-primary fw-bold mb-4">Contact Information</h4>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-4" style="line-height: 2;">
                        <i class="fas fa-phone-alt text-success mx-2"></i>
                        <strong class="text-dark mx-2">Phone:</strong> 
                        <a href="tel:+8801788400821" class="text-decoration-none text-primary">01788400821</a>
                    </li>
                    <li class="d-flex align-items-center mb-4" style="line-height: 2;">
                        <i class="fas fa-envelope text-primary mx-2"></i>
                        <strong class="text-dark mx-2">Email:</strong> 
                        <a href="mailto:abirrifat21@gmail.com" class="text-decoration-none text-primary">abirrifat21@gmail.com</a>
                    </li>
                    <li class="d-flex align-items-center mb-4" style="line-height: 2;">
                        <i class="fab fa-linkedin text-primary mx-2"></i>
                        <strong class="text-dark mx-2">LinkedIn:</strong> 
                        <a href="https://www.linkedin.com/in/rifat-bin-alam-20762b210/" target="_blank" class="text-decoration-none text-primary">Rifat Bin Alam</a>
                    </li>
                    <li class="d-flex align-items-center mb-4" style="line-height: 2;">
                        <i class="fab fa-github mx-2"></i>
                        <strong class="text-dark mx-2">GitHub:</strong> 
                        <a href="https://github.com/AbirRifat" target="_blank" class="text-decoration-none text-primary">AbirRifat</a>
                    </li>
                    <li class="d-flex align-items-center mb-4 mb-md-0" style="line-height: 2;">
                        <i class="fas fa-map-marker-alt mx-2"></i>
                        <strong class="text-dark mx-2">Address:</strong> 
                        Abur Tek Road, Khilkhet, Dhaka-1229
                    </li>
                </ul>
            </div>

            <!-- Google Map Section -->
            <div class="col-md-6 mt-3 mt-md-0" data-aos="fade-left" data-aos-delay="100">
                <h4 class="text-primary fw-bold">My Location</h4>
                <!-- Embed Google Map -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250.7118958108318!2d90.42146237625798!3d23.832798251694264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65d4f7c8d85%3A0xf6d4cd91c513e48f!2sMohammadi%20Fashion%20Sweaters%20Ltd%20.%20%26%20Mohammadi%20Group%20Ltd.%20(MFSL%20%26%20MGL)!5e0!3m2!1sen!2sbd!4v1731993463111!5m2!1sen!2sbd" 
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div class="bg-success bg-opacity-10 d-flex align-items-center">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-down">
            <h1 class="fw-bold text-primary">My Skills</h1>
            <p class="lead text-secondary">These are the technologies and tools I work with:</p>
        </div>
        <div class="row">
            <!-- Web Technologies Section -->
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <h4 class="text-primary fw-bold">Web Technologies</h4>
                <div class="mb-3">
                    <p class="mb-1">HTML</p>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">CSS</p>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">PHP</p>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">JavaScript</p>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">C#</p>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>
            </div>

            <!-- Frameworks Section -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-primary fw-bold">Frameworks & Libraries</h4>
                <div class="mb-3">
                    <p class="mb-1">Laravel</p>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Vue JS</p>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Bootstrap</p>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Tailwind CSS</p>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">jQuery</p>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>
            </div>

            <!-- Tools Section -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-primary fw-bold">Tools</h4>
                <div class="mb-3">
                    <p class="mb-1">Git & Github</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Postman</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">VS Code</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                </div>
            </div>

            <!-- Other Section -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <h4 class="text-primary fw-bold">Other</h4>
                <div class="mb-3">
                    <p class="mb-1">APIs</p>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">RESTful Services</p>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Database Management (MySQL)</p>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

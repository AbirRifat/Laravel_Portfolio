@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="bg-success bg-opacity-10 d-flex align-items-center">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-down">
                <h1 class="fw-bold text-primary">My Projects</h1>
                <p class="lead text-secondary">Here are some of the projects I have worked on:</p>
            </div>
            <div class="row justify-content-center">
                <!-- Project 1 -->
                <div class="col-md-4 mb-4" data-aos="zoom-in">
                    <div class="card shadow-lg border-0">
                        <img src="{{ asset('img/atm.jpg') }}" class="card-img-top" alt="Project 1"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">ATM Management</h5>
                            <p class="card-text text-muted project-description">
                                I built an <strong>ATM management system</strong> using <strong>Laravel</strong> and
                                <strong>Bootstrap</strong>, featuring balance inquiry, withdrawals, deposits, fund transfers, and PIN changes with a responsive interface. It ensures secure transactions and is simple for users.
                            </p>


                            <!-- Visible only on small and medium screens -->
                            <a href="javascript:void(0)" class="text-primary toggle-text d-block d-sm-none">Read More</a>
                            <a href="#" class="btn btn-outline-primary btn-block px-4">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-4 mb-4" data-aos="zoom-in">
                    <div class="card shadow-lg border-0">
                        <img src="{{ asset('img/product.jpg') }}" class="card-img-top" alt="Project 2"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">Product Management</h5>
                            <p class="card-text text-muted project-description">
                                I developed a <strong>Product Management System</strong> using <strong>Laravel</strong> and <strong>Bootstrap</strong>, featuring CRUD operations, pagination, search, and sorting. This responsive system provides businesses with an efficient, user-friendly solution for managing and organizing products effectively.
                            </p>
                            <!-- Visible only on small and medium screens -->
                            <a href="javascript:void(0)" class="text-primary toggle-text d-block d-sm-none">Read More</a>
                            <a href="https://github.com/AbirRifat/ProductManagementSystem" class="btn btn-outline-primary btn-block px-4">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-4 mb-4" data-aos="zoom-in">
                    <div class="card shadow-lg border-0">
                        <img src="{{ asset('img/proline.jpg') }}" class="card-img-top" alt="Project 3"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">Proline</h5>
                            <p class="card-text text-muted project-description">
                                I developed <strong>Proline ERP software</strong> using <strong>PHP, CSS, JavaScript, and Bootstrap</strong>, featuring production, defect, and reject entry, along with a real-time dashboard. It streamlines operations and provides employees with updated data for improved efficiency.
                            </p>
                            <!-- Visible only on small and medium screens -->
                            <a href="javascript:void(0)" class="text-primary toggle-text d-block d-sm-none">Read More</a>
                            <a href="http://proline.purbani.com/registration/login.php" class="btn btn-outline-primary btn-block px-4">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    document.querySelectorAll('.toggle-text').forEach(function(link) {
        link.addEventListener('click', function() {
            const description = this.previousElementSibling;
            description.classList.toggle('truncated');
            // Change the link text based on the state
            this.textContent = description.classList.contains('truncated') ? 'Read More' : 'Read Less';
        });
    });
</script>
@endsection

    <x-layout title="Jobs">
        <body>
            <div class="container-fluid pt-3">
                <div class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">JOB</span>SITE </h1>
                    <div class="navbar-collapse" id="navbarCollapse">
                        <div class="ml-auto mr-auto" style="padding-left: 5px; padding-right: 5px;">
                            <a href="{{ route('jobs.home') }}" class="nav-item nav-link topbarbutton selected-button">Home</a>
                            <a href="#" class="nav-item nav-link topbarbutton">Categories</a>
                        </div>
                        <div class="ml-auto mr-auto">
                            <input type="text" placeholder="Keyword" style="display: inline; height: 38px">
                            <div class="input-group-append" style="display:inline">
                                <button class="input-group-text" style="display:inline"><i class="fa fa-search" style="display: inline"></i></button>
                            </div>
                        </div>
                        <div class="ml-auto mr-auto" style="padding-left: 5px; padding-right: 5px;">
                            <a href="#" class="nav-item nav-link topbarbutton">Login</a>
                            <a href="#" class="nav-item nav-link topbarbutton">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid py-3">
                <div class="container">
                    @if(session('status'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="d-flex align-items-center justify-content-between py-2 px-4 mb-3">
                        <h3 class="m-0">Apply Now</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                    </div>
                    <div class="position-relative">
                        <div class="position-relative overflow-hidden">
                            <div class="overlay">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-1 text-white">/</span>
                                    <a class="text-white" href="">January 01, 2045</a>
                                </div>
                                <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                        <x-job-post :jobs=$jobs />
                    </div>
                </div>
            </div>
            </div>
            <!-- Back to Top -->
            <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


            <!-- JavaScript Libraries -->
            {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script> --}}

            <!-- Contact Javascript File -->
            {{-- <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script> --}}

            <!-- Template Javascript -->
            {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
        </body>
    </x-layout>

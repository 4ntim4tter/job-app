    <x-layout title="Jobs">
        <body>
            <x-top-bar/>
            <div class="container-fluid py-3">
                <div class="container">
                    @if(session('status'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="d-flex align-items-center justify-content-between py-2 px-4 mb-3">
                        <h3 class="m-0">Apply Now</h3>
                        <div class="ml-auto">
                            <input type="text" placeholder="Keyword" style="display: inline; height: 37px">
                            <div class="input-group-append" style="display:inline">
                                <button class="input-group-text" style="display:inline"><i class="fa fa-search" style="display: inline"></i></button>
                            </div>
                        </div>
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
                        <x-job-post :jobs=$jobs :companies=$companies/>
                    </div>
                </div>
            </div>
            </div>
            <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>
        </body>
    </x-layout>
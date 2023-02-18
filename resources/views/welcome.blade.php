    <x-layout title="Jobs">
        <x-top-bar />
            <div class="container-fluid py-3">
                <div class="container">
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex align-items-center justify-content-between py-2 px-4 mb-3">
                        <h3 class="m-0">Apply now:</h3>
                        <form action="{{ route('jobs.filter') }}">
                            <div class="ml-auto">
                                <input type="text" name="search" id="search-input"
                                    placeholder="Keyword"
                                    style="display: inline; height: 37px"
                                    value={{ request()->query('search') }}>
                                <div class="input-group-append" style="display:inline">
                                    <button class="input-group-text" style="display:inline" type="submit"><i
                                            class="fa fa-search" style="display: inline"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="position-relative">
                        <x-job-post :jobs=$jobs/>
                    </div>
                </div>
            </div>
            </div>
            <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>
    </x-layout>

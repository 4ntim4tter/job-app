<x-layout>
    <x-top-bar />
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">

                <!-- Popular News Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Your Jobs</h3>
                    </div>
                    @foreach($jobs as $index => $job)
                    <div class="d-flex mb-3">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">{{ $job->name }}</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Popular News End -->
            </div>
        </div>
    </div>
</x-layout>

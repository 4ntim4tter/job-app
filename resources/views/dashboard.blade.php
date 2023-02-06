<x-layout title="Dashboard">
    <x-top-bar />
    <div class="container-fluid py-4" style="height: 100vh;">
        <div class="container">
            <div class="row" style="height: 100vh;">
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Your Jobs</h3>
                    </div>
                    @foreach ($jobs as $index => $job)
                        <div class="d-flex mb-3">
                            <div class="w-100 d-flex flex-column bg-light px-3 overflow-auto"
                                style="height: 100px; min-width: 500px; max-width:500px;">
                                <div class="" style="font-size: 13px; padding-top: 2%">
                                    <a href="{{ route('jobs.applications', ['job'=>$job->id]) }}" target="jobFrame">{{ $job->name }}</a>
                                    <span class="px-2">/</span>
                                    <span>{{ $job->category }}</span>

                                </div>
                                <a class="h6 m-0 py-1 overflow-hidden" href="">{{ $job->description }}
                                    {{ $job->description }}
                                    {{ $job->description }}
                                    {{ $job->description }}</a>
                                <div style="scale: 0.8; float:right;">
                                    <a class="btn btn-primary font-weight-semi-bold ml-1" href="{{ route('jobs.applications', ['job' => $job->id]) }}" target="jobFrame" style="float: right; display:inline;">Preview</a>
                                    <a class="btn btn-primary font-weight-semi-bold ml-1" href="{{ route('jobs.applications', ['job' => $job->id]) }}" style="float: right; display:inline;">Go To</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <iframe name="jobFrame" frameborder="0" class="" style="display: inline; padding-top: 5%; flex-grow: 1;"></iframe>
            </div>
        </div>
    </div>
</x-layout>

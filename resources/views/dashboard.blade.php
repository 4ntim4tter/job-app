<x-layout title="Dashboard">
    <x-top-bar />
    <div class="container-fluid py-4" style="height: 100vh;">
        <div class="container" style="position: relative;">
            <div class="row" style="height: 100vh;">
                <div class="pb-3">
                    <div class="row py-2 px-4 mb-3" style="display:inline">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Your Jobs</h3>
                        </div>
                    </div>
                    @foreach ($jobs as $index => $job)
                        <div class="d-flex mb-3">
                            <div class="w-100 d-flex flex-column bg-light px-3 overflow-auto"
                                style="height: 200px; min-width: 500px; max-width:500px; position: relative">
                                <div class="" style="font-size: 13px; padding-top: 2%">
                                    <a href="{{ route('jobs.applications', ['job' => $job->id]) }}"
                                        target="jobFrame">{{ $job->name }}</a>
                                    <span class="px-2">/</span>
                                    <span>{{ $job->category }}</span>

                                </div>
                                <p class="h6 m-0 py-1" style="height: 65%; overflow-y: scroll;" href="">{{ $job->description }}
                                    {{ $job->description }}
                                    {{ $job->description }}
                                </p>
                                <div class="" style="scale: 0.8; position: absolute; bottom:0; right: 0;">
                                    <a class="btn btn-primary font-weight-semi-bold ml-1"
                                        href="{{ route('jobs.applications', ['job' => $job->id]) }}"
                                        target="jobFrame" style="float: right;">Preview</a>
                                    <a class="btn btn-primary font-weight-semi-bold ml-1"
                                        href="{{ route('jobs.applications', ['job' => $job->id]) }}" style="float: right;">Go To</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $jobs->links() }}
                </div>
                <div class="py-4 px-4 mb-3" style="display: inline; flex: 1; height:100vh">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Your Jobs</h3>
                    </div>
                    <iframe name="jobFrame" frameborder="0" class=""
                    style="flex: 1; padding-top: 2%; width:100%; height: 100%"></iframe>
                </div>
            </div>
        </div>
    </div>
</x-layout>

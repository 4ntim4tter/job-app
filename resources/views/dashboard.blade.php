<x-layout title="Dashboard">
    <x-top-bar />
    <div class="container-fluid py-4" style="height: 100vh;">
        <div class="container" style="position: relative;">
            @if (session('status'))
                <div class="alert alert-danger flex-grow-1" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row" style="height: 100vh;">
                <div class="pb-3">
                    <div class="row py-2 px-4 mb-3" style="display:inline;">
                        <div class="bg-light py-2 px-4 mb-3" style="min-width: 450px">
                            <h3 class="m-0 overflow-hidden text-wrap"><u>{{ $company->name }}</u></h3>
                            <h3 class="m-0">Posts:</h3>
                        </div>
                    </div>
                    {{ $jobs->links() }}
                    @foreach ($jobs as $index => $job)
                        <div class="d-flex mb-3">
                            <div class="w-100 d-flex flex-column bg-light px-3 overflow-auto"
                                style="height: 200px; min-width: 450px; max-width:500px; position: relative">
                                <div class="" style="font-size: 13px; padding-top: 2%">
                                    <a href="{{ route('jobs.applications', ['job' => $job->id]) }}"
                                        target="jobFrame">{{ $job->name }}</a>
                                    <span class="px-2">/</span>
                                    <span>{{ $job->category }}</span>
                                    <span class="px-2">/</span>
                                    <span>Applications: {{ $job->jobApplication->count() }}</span>

                                </div>
                                <p class="h6 m-0 py-1" style="height: 65%; overflow-y: scroll;" href="">
                                    {{ $job->description }}
                                    {{ $job->description }}
                                    {{ $job->description }}
                                </p>
                                <x-form action="{{ route('jobs.delete', ['job' => $job]) }}" method="DELETE">
                                    <div class=""
                                        style="scale: 0.8; position: absolute; bottom:0; left: 0; padding-left: -10px;">
                                        <button class="btn btn-primary font-weight-semi-bold" type="submit"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                        <label class="h6 m-1 py-1 px-1">
                                            @if ($job->daysOpen() > 0)
                                                This job post is open for {{ $job->daysOpen() }} days.
                                            @else
                                                This job post is closed.
                                            @endif
                                        </label>
                                    </div>

                                </x-form>
                                <div class="" style="scale: 0.8; position: absolute; bottom:0; right: 0;">
                                    <a class="btn btn-primary font-weight-semi-bold"
                                        href="{{ route('jobs.edit', ['job' => $job]) }}">Edit</a>
                                    <a class="btn btn-primary font-weight-semi-bold ml-1"
                                        href="{{ route('jobs.applications', ['job' => $job->id]) }}" target="jobFrame"
                                        style="float: right;">Preview</a>
                                    <a class="btn btn-primary font-weight-semi-bold ml-1"
                                        href="{{ route('jobs.applications', ['job' => $job->id]) }}"
                                        style="float: right;">Go To</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $jobs->links() }}
                </div>
                <div class="py-4 px-4 mb-3 " style="display: inline; flex: 1; height:100vh;">
                    <div class="bg-light py-2 px-4 mb-3" style="margin-left: 6%">
                        <h3 class="m-0">Selected Job Applications</h3>
                    </div>
                    <iframe name="jobFrame" frameborder="0" class=""
                        style="flex: 1; padding-top: 2%; width:100%; height: 100%"></iframe>
                </div>
            </div>
        </div>
    </div>
</x-layout>

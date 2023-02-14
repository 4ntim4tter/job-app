<x-layout title="Admin Dashboard">
    <x-top-bar />
    <div class="container-fluid py-4" style="height: 100vh;">
        @if (session('status'))
            <div class="alert alert-danger flex-grow-1" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="container" style="position: relative;">
            <div class="row" style="height: 100vh;">
                <div class="pb-3">
                    <div class="row py-2 px-4 mb-3" style="display:inline">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0 overflow-hidden text-wrap"><u>Companies</u></h3>
                        </div>
                    </div>
                    {{ $companies->links() }}
                    @foreach ($companies as $index => $company)
                        <div class="d-flex mb-3">
                            <div class="w-100 d-flex flex-column bg-light px-3 overflow-auto"
                                style="height: 200px; min-width: 500px; position: relative">
                                <div class="" style="font-size: 13px; padding-top: 2%">
                                    <a href="{{ route('admin.edit', ['company' => $company->id]) }}"
                                        target="jobFrame">{{ $company->name }}</a>
                                    <span class="px-2">/</span>
                                    <span>{{ $company->email }}</span>

                                </div>
                                <x-form action="{{ route('admin.delete', ['company' => $company]) }}" method="DELETE">
                                    <div class="" style="scale: 0.8; position: absolute; bottom:0; left: 0; padding-left: -10px;">
                                        <button class="btn btn-primary font-weight-semi-bold ml-1" type="submit"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                            {{-- <label class="h6 m-0 py-1">
                                                @if ($job->daysOpen() != 0)
                                                    This job is {{ $job->daysOpen() }} days open.
                                                @else
                                                    This job is closed.
                                                @endif
                                            </label> --}}
                                    </div>

                                </x-form>
                                <div class="" style="scale: 0.8; position: absolute; bottom:0; right: 0;">
                                    <a class="btn btn-primary font-weight-semi-bold"
                                    href="{{ route('admin.edit', ['company'=>$company]) }}">Edit</a>
                                    {{-- <a class="btn btn-primary font-weight-semi-bold ml-1"
                                        href="{{ route('jobs.applications', ['job' => $job->id]) }}" target="jobFrame"
                                        style="float: right;">Preview</a>
                                    <a class="btn btn-primary font-weight-semi-bold ml-1"
                                        href="{{ route('jobs.applications', ['job' => $job->id]) }}"
                                        style="float: right;">Go To</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $companies->links() }}
                </div>
                {{-- <div class="py-4 px-4 mb-3 " style="display: inline; flex: 1; height:100vh;">
                    <div class="bg-light py-2 px-4 mb-3" style="margin-left: 6%">
                        <h3 class="m-0">Selected Job Applications</h3>
                    </div>
                    <iframe name="jobFrame" frameborder="0" class=""
                        style="flex: 1; padding-top: 2%; width:100%; height: 100%"></iframe>
                </div> --}}
            </div>
        </div>
    </div>
</x-layout>

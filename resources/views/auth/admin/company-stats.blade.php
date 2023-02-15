<x-layout>
    <div class="py-4 px-4 mb-3 " style="display: inline; flex: 1; height:100vh;">
        <div class="bg-light py-2 px-4 mb-3" style="margin-left: 6%">
            <div class="flex py-3">
                <div class="container">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h4 class="m-1">{{ $company->name }}</h4>
                    </div>
                    <div class="bg-light py-2 px-4 mb-3">
                        <b> Posted Jobs:</b>
                        <h5>{{ $company->jobs->count() }}</h5>
                        <b> Open Jobs:</b>
                        <h5> {{ $company->jobs->where('open', 1)->count() }}</h5>
                        <b> Closed Jobs:</b>
                        <h5> {{ $company->jobs->where('open', 0)->count() }}</h5>
                        <b> Application per Job: </b>
                        @foreach ($company->jobs as $job)
                        <h5> Name: {{ $job->name }} Applications: {{ $job->jobApplication->count() }}</h5>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

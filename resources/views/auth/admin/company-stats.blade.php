<x-layout>
    <div class="py-4 px-4 mb-3 " style="display: inline; flex: 1; height:100vh;">
        <div class="bg-light py-2 px-4 mb-3" style="margin-left: 6%">
            <div class="flex py-3">
                <div class="container">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h4 class="m-1"><u>{{ $company->name }}</u></h4>
                    </div>
                    <div class="bg-light py-2 px-4 mb-3">
                        <span>
                            <b> Posted Jobs:</b>
                            <b>{{ $company->jobs->count() }}</b> /
                            <b> Open Jobs:</b>
                            <b> {{ $company->jobs->where('open', 1)->count() }}</b> /
                            <b> Closed Jobs:</b>
                            <b> {{ $company->jobs->where('open', 0)->count() }}</b>
                        </span>
                        <p></p>
                        <h5> Application per Job: </h5>
                        @foreach ($company->jobs as $job)
                            <h5> Name: {{ $job->name }} Applications: {{ $job->jobApplication->count() }}</h5>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

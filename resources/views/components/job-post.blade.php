@foreach($jobs as $job)
<div class="position-relative" style="height: 150px;">
    {{-- <img class="img-fluid w-100 h-100" src="img/news-300x300-5.jpg" style="object-fit: cover;"> --}}
    <a class="overlay" href="{{ route('jobs.show', $job) }}">
        <div>
            <p class="text-white" style="font-size: 25px; display: inline;">{{ $job->company->name }}</p>
            <p class="text-white" style="font-size: 25px; display: inline;">|</p>
            <p class="text-white" style="font-size: 12px; display: inline;"> Job category: {{ $job->category }}</p>
            <p class="text-white" style="font-size: 18px;">{{ $job->name }}</p>
        </div>
        <div style="position: relative; top: -15px">
            <p class="text-white" style="font-size: 16px;">Short Description:</p>
            <p class="text-white" style="font-size: 13px; position: relative; top: -15px">{{ $job->description }}</p>
        </div>
    </a>
</div>
<div style="padding:1px"></div>
@endforeach

{{ $jobs->links() }}

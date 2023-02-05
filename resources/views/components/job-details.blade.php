<x-layout>
<div>
    @foreach ($jobApp as $application)  
    <div class="flex py-3">
        <div class="container">
            <div class="bg-light py-2 px-4 mb-3">
                <h4 class="m-1">{{ $application->name }}</h4>
            </div>
            <div class="bg-light py-2 px-4 mb-3">
                <b>Job description:</b>
                <p></p>
                <b>Job requirements:</b>
                <p></p>
            </div>
        </div>
    </div>
    @endforeach
</div>
</x-layout>

<x-layout title="Job Applications">
    <div>
        @foreach ($jobApp as $application)
            <div class="flex py-3">
                <div class="container">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h4 class="m-1">{{ $application->name }}</h4>
                    </div>
                    <div class="bg-light py-2 px-4 mb-3">
                        <b> Email:</b>
                        <h5>{{ $application->email }}</h5>
                        <p></p>
                        <b> Qualifications:</b>
                        <p> {{ $application->qualifications }}</p>
                        <p></p>
                        <a href="{{ Storage::url($application->filename) }}" target="_blank" rel="noopener noreferrer">CV:
                            View</a>
                        <p></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>

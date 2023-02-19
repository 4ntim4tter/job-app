<x-layout title="Company requests">
    <div>
        @foreach ($comp_app as $app_request)
            <div class="flex py-3">
                <div class="container">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h4 class="m-1">{{ $app_request->name }}</h4>
                    </div>
                    <div class="bg-light py-2 px-4 mb-3">
                        <b> Email:</b>
                        <h5>{{ $app_request->email }}</h5>
                        <p></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>

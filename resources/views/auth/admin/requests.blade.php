<x-layout title="Company requests">
    <x-top-bar />
    <div>
        <div class="flex py-3">
            <div class="container">
                <h1><u>Application Requests</u></h1>
            </div>
            @foreach ($comp_app as $app_request)
                <x-form name="comp_request" action="{{ route('admin.create', ['company' => $app_request]) }}" method="GET">
                    <div class="container">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h4>{{ $app_request->name }}</h4>
                            <b> Email:</b> <button class="btn btn-primary font-weight-semi-bold float-right" style="display:inline;">Create</button>
                            <h5>{{ $app_request->email }}</h5>
                        </div>
                    </div>
                </x-form>
            @endforeach
        </div>
    </div>
</x-layout>

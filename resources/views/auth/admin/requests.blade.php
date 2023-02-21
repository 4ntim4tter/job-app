<x-layout title="Company requests">
    <x-top-bar />
    <div>
        <div class="flex py-3">
            <div class="container">
                <h1><u>Application Requests</u></h1>
            </div>
            <div class="container">
                @if (session('status'))
                    <div class="alert alert-danger flex-grow-1" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @foreach ($comp_app as $app_request)
                    <div class="bg-light py-2 px-4 mb-3">
                        <h4>{{ $app_request->name }}</h4>
                        <b> Email:</b>
                        <x-form name="comp_request" action="{{ route('admin.create', ['company' => $app_request]) }}"
                            method="GET" class="float-right mr-1" style="display:inline">
                            <button class="btn btn-primary font-weight-semi-bold"
                                style="display:inline;">Create</button>
                        </x-form>
                        <x-form name="delete_request"
                            action="{{ route('admin.delete_request', ['company' => $app_request]) }}" method="DELETE"
                            class="float-right mr-1" style="display:inline">
                            <button class="btn btn-primary font-weight-semi-bold"
                                style="display:inline;">Delete</button>
                        </x-form>
                        <h5>{{ $app_request->email }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>

<x-layout title="Admin Dashboard">
    <x-top-bar />
    <div class="container-fluid py-4" style="height: 100vh;">
        <div class="container" style="position: relative;">
            @if (session('status'))
                <div class="alert alert-danger flex-grow-1" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div>
                    <div class="row py-2 px-4 mb-3" style="display:inline">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0 overflow-hidden text-wrap"><u>Companies</u></h3>
                        </div>
                    </div>
                    {{ $companies->links() }}
                    @foreach ($companies as $index => $company)
                        <div class="d-flex mb-3">
                            <div class="d-flex flex-column bg-light px-3 overflow-auto"
                                style="height: 200px; min-width: 500px; position: relative">
                                <div class="" style="font-size: 13px; padding-top: 2%">
                                    <a href="{{ route('admin.edit', ['company' => $company]) }}"
                                        target="jobFrame">{{ $company->name }}</a>
                                    <span class="px-2">/</span>
                                    <span>{{ $company->email }}</span>

                                </div>
                                <x-form action="{{ route('admin.delete', ['company' => $company]) }}" method="DELETE">
                                    <div class=""
                                        style="scale: 0.8; position: absolute; bottom:0; left: 0; padding-left: -10px;">
                                        <button class="btn btn-primary font-weight-semi-bold ml-1" type="submit"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </div>
                                </x-form>
                                <div class="" style="scale: 0.8; position: absolute; bottom:0; right: 0;">
                                    <a class="btn btn-primary font-weight-semi-bold"
                                        href="{{ route('admin.edit', ['company' => $company]) }}">Edit</a>
                                    <a class="btn btn-primary font-weight-semi-bold ml-1"
                                        href="{{ route('admin.stats', ['company' => $company]) }}" target="companyStats"
                                        style="float: right;">Stats</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $companies->links() }}
                </div>
                <div class="py-4 px-4 mb-3 " style="display: inline; flex: 1; height:100vh;">
                    <div class="bg-light py-2 px-4 mb-3" style="margin-left: 6%">
                        <h3 class="m-0">Company Stats</h3>
                    </div>
                    <iframe name="companyStats" frameborder="0" class=""
                        style="flex: 1; padding-top: 2%; width:100%; height: 100%"></iframe>
                </div>
            </div>
        </div>
    </div>
</x-layout>

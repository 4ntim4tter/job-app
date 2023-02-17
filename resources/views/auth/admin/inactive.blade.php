<x-layout title="Inactive">
    <x-top-bar />
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Your account is inactive.') }}</div>

                    <div class="card-body">
                        {{ __('Your account cannot be accessed at this time.') }}
                        {{ __('Please wait until the owner of the website activates your account.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

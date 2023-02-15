<x-layout title="Edit Company">
    <div>
        <div class="container-fluid py-3">
            <div class="container">
                <div class="bg-light py-2 px-4 mb-3">
                    <h4 class="m-1">Edit Company</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form bg-light mb-3" style="padding: 30px;">
                            <div id="success"></div>
                            <x-form name="sentMessage" id="jobForm"
                                action="{{ route('admin.store', ['id' => $company->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="flex-grow-1">
                                        <div class="control-group">
                                            <input type="text" class="form-control p-4" id="name" name="name"
                                                placeholder="Name" required="required" value="{{ $company->name }}"
                                                data-validation-required-message="Please enter your name" />
                                            <p class="help-block text-danger"></p>
                                            <input type="text" class="form-control p-4" id="email"
                                                name="email" placeholder="email" required="required"
                                                value="{{ $company->email }}"
                                                data-validation-required-message="Please enter your email" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="control-group">
                                    <textarea class="form-control" rows="5" id="description" name="description" placeholder="Description"
                                        required="required" data-validation-required-message="Please enter your description">{{ $Company->description }}</textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" rows="5" id="requirements" name="requirements" placeholder="Requirements"
                                        required="required" data-validation-required-message="Please enter your requirements">{{ $job->requirements }}</textarea>
                                    <p class="help-block text-danger"></p>
                                </div> --}}
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                    type="submit" id="sendMessageButton">Edit</button>
                                <a class="btn btn-primary font-weight-semi-bold px-4"
                                    style="height: 50px; line-height: 35px; float:right; display:inline"
                                    id="goBackButton" href="{{ route('admin.dash') }}">
                                    Cancel
                                </a>
                        </div>
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>

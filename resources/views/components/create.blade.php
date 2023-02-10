<x-layout>
    <x-layout title="Job" />
    <div>
        <div class="container-fluid py-3">
            <div class="container">
                <div class="bg-light py-2 px-4 mb-3">
                    <h4 class="m-1">Post new Job:</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form bg-light mb-3" style="padding: 30px;">
                            <div id="success"></div>
                            <x-form name="sentMessage" id="jobForm" action="{{ route('jobs.store') }}" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="flex-grow-1">
                                        <div class="control-group">
                                            <input type="text" class="form-control p-4" id="name" name="name"
                                                placeholder="Name" required="required" value="{{ old('name') }}"
                                                data-validation-required-message="Please enter your name" />
                                            <p class="help-block text-danger"></p>
                                            <input type="text" class="form-control p-4" id="category"
                                                name="category" placeholder="Category" required="required"
                                                value="{{ old('category') }}"
                                                data-validation-required-message="Please enter your category" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" rows="5" id="description" name="description" placeholder="Description"
                                        required="required" value="{{ old('description') }}"
                                        data-validation-required-message="Please enter your description"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" rows="5" id="requirements" name="requirements" placeholder="Requirements"
                                        required="required" value="{{ old('requirements') }}"
                                        data-validation-required-message="Please enter your requirements"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <label for="publish">Publish</label>
                                <input type="checkbox" name="publish" id="publish">
                                <label for="open">Open</label>
                                <input type="checkbox" name="open" id="open">
                                @if([)])fix this
                                <input type="datetime" name="enddate" id="enddate">
                                @endif
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                    type="submit" id="sendMessageButton">Add</button>
                                <a class="btn btn-primary font-weight-semi-bold px-4"
                                    style="height: 50px; line-height: 35px; float:right;" id="goBackButton"
                                    href="{{ route('jobs.dashboard') }}">
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

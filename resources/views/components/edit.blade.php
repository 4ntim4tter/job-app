<x-layout title="Edit Job Post">
    <div>
        <div class="container-fluid py-3">
            <div class="container">
                <div class="bg-light py-2 px-4 mb-3">
                    <h4 class="m-1">Edit job</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form bg-light mb-3" style="padding: 30px;">
                            <div id="success"></div>
                            <x-form name="sentMessage" id="jobForm" action="{{ route('jobs.store', ['id' => $job->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="flex-grow-1">
                                        <div class="control-group">
                                            <input type="text" class="form-control p-4" id="name" name="name"
                                                placeholder="Name" required="required" value="{{ $job->name }}"
                                                data-validation-required-message="Please enter your name" />
                                            <p class="help-block text-danger"></p>
                                            <input type="text" class="form-control p-4" id="category"
                                                name="category" placeholder="Category" required="required"
                                                value="{{ $job->category }}"
                                                data-validation-required-message="Please enter your category" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" rows="5" id="description" name="description" placeholder="Description"
                                        required="required" data-validation-required-message="Please enter your description">{{ $job->description }}</textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" rows="5" id="requirements" name="requirements" placeholder="Requirements"
                                        required="required" data-validation-required-message="Please enter your requirements">{{ $job->requirements }}</textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                    type="submit" id="sendMessageButton">Edit</button>
                                <div class="ml-4" style="display: inline;">
                                    <label for="publish">Publish</label>
                                    <input class="publish" type="checkbox" name="publish" id="publish" @if($job->published === 1)checked @endif>
                                    <label for="open">Open</label>
                                    <input class="open" type="checkbox" name="open" id="open" @if($job->open === 1)checked @endif>
                                    <input class="enddate" type="date" name="enddate" id="enddate" @if ($job->open === 1 && $job->end_date != null) 
                                        value="{{ $job->end_date }}"
                                    @endif>
                                </div>
                                <a class="btn btn-primary font-weight-semi-bold px-4"
                                    style="height: 50px; line-height: 35px; float:right; display:inline"
                                    id="goBackButton" href="{{ route('jobs.dashboard') }}">
                                    Cancel
                                </a>
                                {{-- <form action="{{ route('jobs.delete') }}" method="DELETE">
                                    @csrf
                                    <div class="btn btn-primary font-weight-semi-bold px-1 pr-1 mr-2"
                                        style="height: 50px; float: right; display:inline">
                                        <button class="btn btn-primary font-weight-semi-bold px-4"
                                            style="display:inline" type="submit"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </div>
                                <form> --}}
                        </div>
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>

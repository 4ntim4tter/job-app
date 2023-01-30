<x-layout title="Job" />
<div>
    <div class="container-fluid py-3">
        <div class="container">
            <div class="bg-light py-2 px-4 mb-3">
                <h4 class="m-1">Company {{ $job->name }} is looking for {{ $job->category }}</h4>
            </div>
            <div class="bg-light py-2 px-4 mb-3">
                <b>Job description:</b>
                <p>{{ $job->description }}</p>
                <b>Job requirements:</b>
                <p>{{ $job->requirements }}</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form bg-light mb-3" style="padding: 30px;">
                        <div id="success"></div>
                        <x-form name="sentMessage" id="contactForm" action="{{ route('jobs.apply') }}" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" id="name" placeholder="Full Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="email" class="form-control p-4" id="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="file" class="form-control p-4" id="cv" placeholder="CV" required="required" data-validation-required-message="Please upload your CV" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="5" id="qualifications" placeholder="Qualifications" required="required" data-validation-required-message="Please enter your qualifications"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit" id="sendMessageButton">Apply</button>
                                <a class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px; line-height: 35px; float:right;" id="goBackButton" href="{{ route('jobs.home') }}">
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

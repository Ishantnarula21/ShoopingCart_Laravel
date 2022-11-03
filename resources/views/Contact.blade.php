@extends('common')
@section('content')
    <!-- new contact  -->
    <div class="col-12 d-flex mt-2 contact-image">
        <div class="col-6 d-flex justify-content-center mt-5 pt-5">
            <div class="col-9 getintouch m-5">
                <h1><i>Get in Touch</i></h1>
                <h4>Let us know how we can help or set <br /> up a time for callback</h4>
                <br />
                <h6>Looking for something else?</h6>
                <input type="submit" name="job" value="Apply for a job" class="job" />
                <input type="submit" name="callback" value="Request Callback?" class="job" />
            </div>
        </div>
        <div class="col-6 d-flex justify-content-center mt-2 pt-2">
            <div class="col-7 form-div d-flex justify-content-center">
                <div class="col-11 form-div-inner">
                    <span class="lets float-start">
                        <h3>Let's Talk</h3>
                    </span>
                    <span class="ri float-end mt-2">Required Information*</span>
                    <div class="mt-5">
                        <form class="">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Discuss your query here</label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary query">Send Query</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

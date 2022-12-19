@extends('adminFrontEnd.master')
@section('title')
    Add Teacher
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase text-center">Add Course</h6>
            <h3 class="text-center">{{session('message')}}</h3>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="text-center mb-0">Course Form</h5>
                        </div>
                        <hr/>
                        <form action="{{route('new-course')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="teacher_id" value="{{Session::get('teacherId')}}">
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Course Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_name" class="form-control" id="inputEnterYourName" placeholder="Enter Your Course Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Enter your Course URL</label>
                                <div class="col-sm-9">
                                    <input type="text" name="slug" class="form-control" id="inputPhoneNo2" placeholder="Enter your Course URL">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Course Code</label>
                                <div class="col-sm-9">
                                    <input type="number" name="course_code" class="form-control" id="inputEmailAddress2" placeholder="Enter Course code">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" id="inputAddress4" rows="3" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">Course fee</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_fee" class="form-control" placeholder="course fee">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection


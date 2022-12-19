@extends('adminFrontEnd.master')
@section('title')
    Add Teacher
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase text-center">Edit Teacher Form</h6>
            <h3 class="text-center">{{session('message')}}</h3>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">User Registration</h5>
                        </div>
                        <hr/>
                        <form action="{{route('update-teacherInf')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" value="{{$teacher->name}}" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" value="{{$teacher->phone}}" class="form-control" id="inputPhoneNo2" placeholder="Phone No">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" value="{{$teacher->email}}" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="address" id="inputAddress4" rows="3" placeholder="Address">{{$teacher->address}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <td><img src="{{asset($teacher->image)}}" alt="" style="height: 50px;width: 50px"></td>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                                    <button type="submit" class="btn btn-primary px-5">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>{{session('message')}}</h1>

                        <form action="{{ route('update.student') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="student_id" value="{{$studentData->id}}">

                            <label for="">First Name</label>
                            <input type="text" name="first_name" value="{{$studentData->first_name}}" placeholder="First Name" class="form-control"><br>

                            <label for="">last Name</label>
                            <input type="text" name="last_name" value="{{$studentData->last_name}}" placeholder="Last Name" class="form-control"><br>

                            <label for="">Roll</label>
                            <input type="text" name="roll"  value="{{$studentData->roll}}" placeholder="Roll NO" class="form-control"><br>

                            <label for="">Email</label>
                            <input type="text" name="email"  value="{{$studentData->email}}" placeholder="Email" class="form-control"><br>

                            <label for="">Phone</label>
                            <input type="text" name="phone"  value="{{$studentData->phone}}" placeholder="Phone No " class="form-control"><br>

                            <label for="">Image</label>
                            <input type="file" name="image"><br> <br>
                            <img src="{{asset($studentData->image)}}" alt="" style="height: 50px;width: 50px"> <br><br>
                            <input type="submit" class="btn btn-outline-info form-control" value="Click me to update">

                        </form>

{{--                        <table class="table table-bordered table-hover">--}}
{{--                            <tr>--}}
{{--                                <th>sl</th>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Roll</th>--}}
{{--                                <th>Phone</th>--}}
{{--                                <th>Email</th>--}}
{{--                                <th>Action</th>--}}
{{--                            </tr>--}}
{{--                            @php $i=1; @endphp--}}
{{--                            @foreach($students as $student)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$i++}}</td>--}}
{{--                                    <td>{{$student->first_name .' '.$student->last_name}}</td>--}}
{{--                                    <td>{{$student->last_name}}</td>--}}
{{--                                    <td>{{$student->roll}}</td>--}}
{{--                                    <td>{{$student->phone}}</td>--}}
{{--                                    <td>{{$student->email}}</td>--}}
{{--                                    <td><a href="{{route('student.edit',['id'=>$student->id])}}" class="btn btn-outline-info" title="Edit">Edit</a></td>--}}
{{--                                    --}}{{--                          <td><a href="{{route('student.delete',['id'=>$student->id])}}" onclick="return confirm('Are you sure to Delete this!?')" class="btn btn-outline-danger" title="Delete">Delete</a></td>--}}
{{--                                    <form action="{{route('student.delete')}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <td>--}}
{{--                                            <input type="hidden" name="student_id" value="{{$student->id}}">--}}
{{--                                            <input type="submit" value="Delete"  class="btn btn-outline-danger" title="Delete" onclick="return confirm('Are you sure?')">--}}
{{--                                        </td>--}}
{{--                                    </form>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                        </table>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('adminFrontEnd.master')
@section('title')
    Manage Teacher
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <h3 class="text-center">{{session('message')}}</h3>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->phone}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->address}}</td>
                        <td>
                            <img src="{{$teacher->image}}" alt="" style="height: 50px;width: 70px">
                        </td>
                        <td>
                            <a href="{{route('edit-teacher',['id'=>$teacher->id])}}" class="btn btn-outline-primary float-end">Edit</a>
                            <form action="{{route('delete-teacher')}}" method="post">
                                @csrf
                                <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                                <input type="submit" value="Delete" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection


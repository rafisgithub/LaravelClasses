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

                        {{--                    {{ __('You are logged in!') }}--}}
                        <form action="{{route('new.student')}}" method="post">
                            @csrf
                            <label for="">First Name :</label>
                            <input type="text" name="first_name" placeholder="First Name" class="form-control"><br>

                            <label for="">Last Name :</label>
                            <input type="text" name="last_name" placeholder="Last Name" class="form-control"><br>

                            <label for="">Roll :</label>
                            <input type="text" name="roll" placeholder="Roll" class="form-control"><br>

                            <label for="">Email :</label>
                            <input type="text" name="email" placeholder="Email" class="form-control"><br>

                            <label for="">Phone :</label>
                            <input type="text" name="phone" placeholder="Phone" class="form-control"><br>


                            <input type="submit" class="form-control btn btn-outline-success" value="submit">

                        </form>
                        <hr>
                        <hr>
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>sl</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Roll</th>
                            </tr>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->first_name>''.$student->last_name}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->roll}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

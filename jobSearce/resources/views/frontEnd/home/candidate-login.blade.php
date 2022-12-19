@extends('frontEnd.master')
@section('title')
    LogIn
@endsection

@section('content')

<div class="container mb-100">
    <h3>{{session('message')}}</h3>
    <form method="post" action="{{route('new-login')}}">
        @csrf
        <div class="form-box">
            <input type="text" name="username" placeholder="Email" class="mb-14">
            <input type="password" name="pass" placeholder="Password">
        </div>
        <div class="text-center mt-2">
            <input type="submit" value="Login" class="btn btn-outline-primary">
        </div>
    </form>
</div>
@endsection

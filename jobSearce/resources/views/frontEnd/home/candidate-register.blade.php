@extends('frontEnd.master')
@section('title')
    Register
@endsection
@section('content')
    <div class="modal-body">
        <div class="form-pop-up-content ptb-60 pl-60 pr-60">
            <div class="area-title text-center mb-43">
                <h3>{{session('message')}}</h3>
                <img src="{{asset('frontEndAsset')}}/images/logo/logo.png" alt="jobhere">
            </div>
            <form method="post" action="{{route('new-candidate')}}">
                @csrf
                <div class="form-box box2">
                    <input type="text" name="first_name" placeholder="First Name" class="mb-14">
                    <input type="text" name="last_name" placeholder="Last Name">
                </div>
                <div class="form-box">
                    <input type="email" name="email" placeholder="Email" class="mb-14">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="fix ptb-30">
                    <span class="remember pull-left"><input class="p-0 pull-left" type="checkbox">Remember Me</span>
                </div>
                <div class="text-center">
                    <button type="submit" class="text-uppercase">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

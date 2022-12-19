<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>bitBirds Solutions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<style>
    .button {
        display: inline-block;
        padding-bottom: 5%;
    }
    .center {
        width: 55%;
        height: 100%;
        margin: 0 auto;
    }
</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 mt-5 mb-5 m-auto">
            <form action="{{route('new-info')}}" method="post">
                @csrf
                <h5 style="padding-top: 1%; padding-left: 1.5%; color: darkcyan;">Select your Location</h5>
                <div class="container-fluid" style="padding-top: 1%;">
                    <div class="row" style="padding-right: 5%;">
                        <h3>{{session('message')}}</h3>
                        <div class="mb-3">
                            <select class="form-select" name="city_name_1" aria-label="Default select example" id="select_from" style="color: #5e5e5e;">
                                <option selected >Select From</option>
                                <option>Dhaka</option>
                                <option>Sirajgng</option>
                                <option>Chittagong</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="city_name_2" aria-label="Default select example" id="select_to" style="color: #5e5e5e;">
                                <option selected >Select To</option>
                                <option>Dhaka</option>
                                <option>Sirajgng</option>
                                <option>Chittagong</option>
                            </select>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <select class="form-select" name="bus_name" aria-label="Default select example"
                                                style="color: #5e5e5e;">
                                            <option selected>Select Car</option>
                                            <option>Ena</option>
                                            <option>Hanif</option>
                                            <option>SA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <select class="form-select" name="counter_number" aria-label="Default select example"
                                                style="color: #5e5e5e;">
                                            <option selected>Select Counter</option>
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="#">
                            <input type="submit" value="Confirm Now">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

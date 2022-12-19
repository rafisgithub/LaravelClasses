<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Curreny Converter</title>
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('frontEndAsset')}}/js/jquery.animate-shadow.min.js"></script>
    <script type="text/javascript" src="{{asset('frontEndAsset')}}/js/custom.jquery.js"></script>
</head>
<body>
<div class="container">
    <table class="table table-bordered table-hover">
        <tr class="row">
            <form action="{{route('bd-currency')}}" method="post">
                @csrf
                <td class="col-md-12">
                    <label for="Amount">Enter BD amount</label>
                    <input type="text" id="Amount" class="form-control" name="bd_taka">
                </td>
                <td ><input type="submit" value="submit" class="btn btn-info form-control"></td>
            </form>
        </tr>
        @foreach($usCurrency as $onecurrency)
        <tr class="row">
           <td class="col-md-12">
               <label for="">US Doller:</label>
               <input type="text" value="{{$convertCunrrency->bd_taka}}" class="form-control">
           </td>
        </tr>
        @endforeach
    </table>
</div>

<script src="{{asset('frontEndAsset')}}/js/bootstrap.min.js"></script>
</body>
</html>


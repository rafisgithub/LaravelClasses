<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row mt-3 mb-2">
        <div class="col-md-2">
            <div class="card">
                <a href="{{route('/')}}" class="btn btn-outline-dark">Add Blogs</a>
            </div>
        </div>
    </div>
    <h4>{{session('message')}}</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>sl</th>
                            <th>Blog title</th>
                            <th>Author Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @php $i=1 @endphp
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$blog->blog_title}}</td>
                            <td>{{$blog->author}}</td>
                            <td>{{$blog->category}}</td>
                            <td>{{$blog->description}}</td>
                            <td>
                                <img src="{{asset($blog->image)}}" alt="" style="height: 60px;width: 60px">
                            </td>
                            <td>
                                <a href="{{route('edit-blog',['id'=>$blog->id])}}" class="btn btn-outline-secondary">Edit</a>
                                <form action="{{route('delete-blog')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                    <input type="submit" value="Delete" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete this?')">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


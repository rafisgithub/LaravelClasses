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
                <a href="{{route('all-blogs')}}" class="btn btn-outline-dark">All Blogs</a>
            </div>
        </div>
    </div>
    <h4>{{session('message')}}</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update-blog')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="">Blog Title</label>
                        <input type="text" name="blog_title" value="{{$blog->blog_title}}" class="form-control" placeholder="Blog title"><br>

                        <label for="">Author Name</label>
                        <input type="text" name="author" value="{{$blog->author}}" class="form-control" placeholder="Author Name"><br>

                        <label for="">Category</label>
                        <input type="text" name="category" value="{{$blog->category}}" class="form-control" placeholder="Category"><br>

                        <label for="">Description</label>
                        <input type="text" name="description" value="{{$blog->description}}" class="form-control" placeholder="Description"><br>

                        <label for="">Image:</label>
                        <img src="{{ asset($blog->image)}}" alt="" style="height: 50px ;width: 50px">
                        <input type="file" name="image"class="form-control"><br>
                        <input type="hidden" name="id" value="{{$blog->id}}">
                        <input type="submit" value="click me to update" class="btn btn-light">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


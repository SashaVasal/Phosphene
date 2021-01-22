<!DOCTYPE html>
<html>
<head>
    <title>laravel 6 image upload example — ItSolutionStuff.com.com</title>
</head>

<body>
<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading"><h2>laravel 6 image upload example — ItSolutionStuff.com.com</h2></div>
        <div class="panel-body">

            <form action="{{ route('image.upload') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">

                    <div class="col-md-6">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>

                </div>
            </form>
            @isset($path)
                <img src="{{asset('/storage/'.$path)}}" alt="">
            @endisset
        </div>
    </div>
</div>
</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laravel lesson_1</title>
</head>
<body>


<div class="container">
    <div class="row mt-5">
        @if(isset($post))

            <div class="card m-auto" style="width: 18rem;">
                <img src="{{asset('storage/images/'.$post->image)}}" class="card-img-top" alt="...">
                <div style="text-align: center" class="card-body" >
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->sub_title}}</p>
                    <a href="{{route('home')}}" class="btn btn-primary">Go back</a>
                </div>
            </div>
        @endif

    </div>

</div>






</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laravel lesson_1</title>
</head>
<body>

<div class="container">

    <div class="row">

        <div class="card-header">
            <a class="btn btn-primary" href="{{route('post.create')}}">Create</a>

        </div>

        <div class="col-12">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Sub_Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($posts))
                    @foreach($posts as $key => $post)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->sub_title}}</td>
                            <td>{{$post->description}}</td>
                            <td style="width: 50px; height: 50px; border-radius: 50%;"><img
                                    style="width: 50px; height: 50px; border-radius: 50%;"
                                    src="{{ asset('storage/images/'.$post->image) }}"
                                    alt="">
                            </td>

                            <td>
                                <span style=" padding: 10px 20px 10px 20px; border-radius: 30px; " ;
                                      class="badge bg-{{ $post->status === 1 ? 'success' : 'danger' }}">
                                    {{$post->status === 1 ? 'active' : 'inactive'}}
                                </span>
                            </td>
                            <td>
                                <a href="{{route('post.show', $post)}}" class="btn btn-warning">Show</a>
                                <a href="{{route('post.edit', $post)}}" class="btn btn-primary">Edit</a>
                                <form class="d-inline" action="{{route('post.destroy', $post)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>


                            </td>

                        </tr>

                    @endforeach

                </tbody>

                @endif
            </table>


        </div>


    </div>


</div>


</body>
</html>

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

    <div class="row mt-5 ">
    <div style="text-align: center;font-size: 40px;font-weight: bold;"> <p>Add information</p>  </div>

        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">

                    <div class="container">
                        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                            @method('POST')
                            @csrf

                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Title *</label>
                                            <input id="form_name" type="text" name="title"
                                                   class="form-control  @error('title') is-invalid @enderror"
                                                   placeholder="Please enter your title *"
                                                   data-error="title is required."
                                                   value="{{old('title')}}">

                                            @error('title')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Subtitle *</label>
                                            <input id="form_lastname" type="text" name="sub_title"
                                                   class="form-control @error('sub_title') is-invalid @enderror"
                                                   placeholder="Please enter your sub_title *"
                                                   data-error="sub_title is required."
                                                   value="{{old('sub_title')}}">

                                            @error('sub_title')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Image *</label>
                                            <input id="form_message" type="file" name="image"
                                                   class="form-control @error('image') is-invalid @enderror"
                                                   placeholder="Please enter your image *"
                                                   data-error="Image is required.">
                                            @error('image')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Description *</label>
                                                <textarea id="form_message" name="description"
                                                          class="form-control @error('description') is-invalid @enderror"
                                                          placeholder="Write  description here." rows="4"
                                                          data-error="Please, leave us a description.">
                                                    {{old('description')}}
                                                </textarea
                                                >
                                                @error('description')
                                                <span style="color: red">{{$message}} </span>
                                                @enderror
                                            </div>

                                        </div>


                                        <div class="col-md-12 m-1">

                                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block"
                                                   value="Create">

                                        </div>

                                    </div>


                                </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
</div>






</body>
</html>

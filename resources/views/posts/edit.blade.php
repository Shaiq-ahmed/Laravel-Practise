<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('assests/parsley.css')}}">
</head>
<body>
    <div class="row">
        <div class="col-md-6 offset-3 mt-5">
            <h3 class="text-center">Edit Post</h3>
            @if ($errors->any())
             <div class="alert alert-danger" role="alert">
                 <ul>
                    @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
            @endif

            @if (Session::has('alert-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{session::get('alert-success')}}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>


            @endif
        <form method="post" action="{{route('post.store')}}">
            @csrf
            <div class="mb-3 mt-5">
              <label>title</label>
              <input type="text" name="title" class="form-control" placeholder="Post Title"  value={{old('title',$post->title)}} >

            </div>
            <div class="mb-3 mt-5">
                <label>description</label>
                <textarea class="form-control" name="description" placeholder="Enter your Post" >{{old('description',$post->description)}}</textarea>

              </div>
              <div class="mb-3 mt-5">
                <label>Published</label>
                <select name="is_published" class="form-control">
                    <option disabled selected>Choose Option</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>


                </select>

              </div>
              <div class="mb-3 mt-5">
                <label>Active</label>

                <select name="is_active" class="form-control">
                    <option disabled selected>Choose Option</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>


                </select>
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script>
        $('#form').parsley();
    </script>

</body>
</html>

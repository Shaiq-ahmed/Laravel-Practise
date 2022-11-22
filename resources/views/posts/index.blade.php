<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        #outer{
            text-align: center
        }
        .inner{
            display: inline-block
        }
    </style>
</head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('assests/parsley.css')}}">

<body>
    <div class="row">
        <div class="col-md-6 offset-2 mt-5">
            <h3 class="text-center">Posts</h3>
            @if (count($posts)>0)
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created At</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->created_at}}</td>
                        <td id="outer" >
                            <a href="{{route('post.show',$post->id)}}" class="btn btn-success inner" >view</a>
                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-info inner">edit</a>
                            <form method="POST" class="inner" action="{{route('post.destroy',$post->id)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger " type="submit">del</button>
                            </form>

                        </td>

                      </tr>

                    @endforeach

                </tbody>
              </table>


             @else
              <h4 class="text-center text-danger">No Post found</h4>

            @endif
           {{-- {{$posts ?? ''->links()}} --}}



        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script>
        $('#form').parsley();
    </script>

</body>
</html>

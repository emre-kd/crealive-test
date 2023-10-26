@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="close float-right" data-dismiss="alert" aria-label="Close"  style="background: transparent; border:none;">
                                <span aria-hidden="true" class="text-right" style="font-size:20px;">&times;</span>
                              </button>
                        </div>
                    @endif
                    <div class="table-responsive"> 
                        <table class="table table-responsive table-responsive">
                            <a href="{{ route('blogs.create') }}">
                                <button class="btn btn-primary">Add Blog</button>
                            </a>
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Category Name</th>

                                    <th scope="col">User Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>


                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs->sortByDesc('id') as $blog)
                                    <tr>
                                        <th scope="row">{{ $blog->id }}</th>
                                        <td>
                                            @foreach ($categories as $category)
                                                @if ($category->id == $blog->category_id)
                                                    {{ $category->name }}
                                                @endif
                                            @endforeach
                                        </td>

                                        <td>
                                            @foreach ($users as $user)
                                                @if ($user->id == $blog->user_id)
                                                    {{ $user->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{!!substr(strip_tags($blog->description), 0, 255)!!} ...	</td>

                                        <td>
                                        
                                        
                                        <img class="img-fluid"   style="max-width:75px; max-height:75px;"  src="{{ asset('images/' . $blog->image) }}" alt="{{ $blog->title }} Image">
                                        </td>

                                       

                                        <td>


                                            <a href=" {{ route('blogs.edit', $blog->id) }} ">
                                                <i class="bi bi-pencil-square"></i>

                                            </a>

                                            <a href="" data-toggle="modal"
                                                data-target="#exampleModal{{ $blog->id }}">

                                                <i class="bi bi-trash3-fill" style="color:crimson;"></i>
                                            </a>

                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@foreach ($blogs as $blog)
    <div class="modal fade" id="exampleModal{{ $blog->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $blog->id }}</h5>

                </div>
                <div class="modal-body">
                    Do you wanna delete <b>{{ $blog->title }} </b> ?
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>



                    <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
@endforeach

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

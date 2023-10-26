@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
               

              
                        <form method="POST" action=" {{ route('blogs.update', $blog->id) }} " enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="row ">


                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <div class="col-4">
                                        <label for="title">Title</label>
                                        <input name="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Blog Title" value="{{$blog->title}}">

                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror




                                    </div>
                                    <div class="col-4">
                                        <label for="category_id">Category</label>
                                        <select name="category_id"
                                            class="form-control @error('category_id') is-invalid @enderror">

                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @if($blog->category_id == $category->id) selected @endif> {{ $category->name }} </option>
                                            @endforeach
                                        </select>

                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror




                                    </div>

                                    <div class="col-4">
                                        <label for="image">Image</label>

                                        <input type="file" name="image" accept="image/*"
                                            class="form-control @error('image') is-invalid @enderror">

                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror




                                    </div>

                                    <div class="col-12">
                                        <br>
                                        <label for="description">Description</label>

                                        <textarea name="description" id="" cols="30" rows="10"
                                            class="form-control @error('description') is-invalid @enderror" placeholder="Description">{{$blog->description}}</textarea>

                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror




                                    </div>



                                </div>

                                <div class="text-center">
                                    <br>

                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

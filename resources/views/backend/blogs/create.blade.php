@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

              
                        <form method="POST" action=" {{ route('blogs.store') }} " enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="row ">


                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <div class="col-4">
                                        <label for="title">Title</label>
                                        <input name="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Blog Title">

                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror




                                    </div>
                                    <div class="col-4">
                                        <label for="category_id">Category</label>
                                        <select name="category_id"
                                            class="form-control @error('category_id') is-invalid @enderror">

                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
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
                                            class="form-control @error('description') is-invalid @enderror" placeholder="Description"></textarea>

                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror




                                    </div>



                                </div>

                                <div class="text-center">
                                    <br>

                                    <button type="submit" class="btn btn-success">Create</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

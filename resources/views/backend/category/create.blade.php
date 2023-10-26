@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <form method="POST" action=" {{ route('categories.store') }} ">
                            @csrf
                            <div class="form-row">
                                <div class="row ">
                                    <div class="col-3">
                                    </div>
                                    <div class="col-6">
                                        <input name="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Category Name">

                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                                    </div>

                                    <div class="col-3">
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

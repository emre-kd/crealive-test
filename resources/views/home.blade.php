@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive"> 
                            <table class="table table-responsive table-responsive">
                       
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Category Name</th>
    
                                        <th scope="col">User Name</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
    
    
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
    
                                           
    
    
                                        </tr>
                                    @endforeach
    
                                </tbody>
                            </table>
                        </div>

                        

                    </div>
                </div>
            </div>

      
            <div class="col-md-12 mt-3">
                <div class="card">

                    <div class="card-body">
                        <table class="table table-hover">
                
                            <thead>
                                <tr>
                                    <th scope="col">Category Id</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Category Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories->sortByDesc('id') as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>
                                            @foreach ($users as $user)
                                                @if ($user->id == $category->user_id)
                                                    {{ $user->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $category->name }}</td>


                          

                                    </tr>


                          
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

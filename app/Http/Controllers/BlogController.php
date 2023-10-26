<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        $users = User::all();

        return view('backend.blogs.index', compact('blogs', 'users' , 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.blogs.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'description' => 'required|string',

        ]);

        $categories = Category::all();
        $users = User::all();


          // Create a new task using the Task model
          $blog = new Blog();
          $blog->title = $request->title;
          $blog->user_id = $request->user_id;

          $blog->description = $request->description;
          $blog->category_id = $request->category_id;

          if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $blog->image = $imageName;

            // Now, you can save the $imageName to your database or perform any other necessary actions.
        }

          $blog->updateTimestamps();
          $blog->save();
  

          // Redirect to a success page or route
          return redirect()->route('blogs.index')
            ->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();


        return view ('backend.blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'category_id' => 'required',
            'description' => 'required|string',

        ]);

            $blog = Blog::findOrFail($id);


 
          $blog->title = $request->title;
          $blog->user_id = $request->user_id;

          $blog->description = $request->description;
          $blog->category_id = $request->category_id;

          if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $blog->image = $imageName;

            // Now, you can save the $imageName to your database or perform any other necessary actions.
          }

          $blog->updateTimestamps();
          $blog->save();
  

          return redirect()->route('blogs.index')->with('success', 'Blog Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');

    }
}

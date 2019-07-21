<?php

namespace App\Http\Controllers;

use App\Post;
use App\Categories;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Post::All();
        $data = Post::with('cat')->get();
        return view('admin.post', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::All();
        return view('admin.add-post', compact('category'));
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
            'id_category'       =>  'required',
            'title'             =>  'required',
            'short_description' =>  'required',
            'content'           =>  'required',
            'image'             =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'id_category'       =>  $request->id_category,
            'title'             =>  $request->title,
            'slug'              =>  str_slug($request->title),
            'short_description' =>  $request->short_description,
            'content'           =>  $request->content,
            'image'             =>  $new_name
        );

        Post::create($form_data);

        return redirect('/admincms/post')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Post::findOrFail($id);
        return view('post', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $category = Categories::All();
        $data     = Post::findOrFail($id);
        return view('admin.edit-post', compact('data','category'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'id_category'       =>  'required',
                'title'             =>  'required',
                'short_description' =>  'required',
                'content'           =>  'required',
                'image'             =>  'required|image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'id_category'       =>  'required',
                'title'             =>  'required',
                'short_description' =>  'required',
                'content'           =>  'required'
                ]);
        }

        $form_data = array(
            'id_category'       =>  $request->id_category,
            'title'             =>  $request->title,
            'slug'              =>  str_slug($request->title),
            'short_description' =>  $request->short_description,
            'content'           =>  $request->content,
            'image'             =>  $image_name
        );
  
        Post::whereId($id)->update($form_data);

        return redirect('/admincms/post')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Post::findOrFail($id);
        $data->delete();

        return redirect('/admincms/post')->with('success', 'Data is successfully deleted');
    }
}

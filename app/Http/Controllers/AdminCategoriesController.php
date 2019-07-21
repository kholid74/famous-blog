<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categories::All();
        return view('admin.categories', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-category');
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
            'category_name'    =>  'required',
        ]);

        $form_data = array(
            'category_name'     =>  $request->category_name,
            'cat_slug'              =>  str_slug($request->category_name)
        );

        Categories::create($form_data);

        return redirect('/admincms/categories')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Categories::findOrFail($id);
        return view('admin.categories', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Categories::findOrFail($id);
        return view('admin.edit-category', compact('data'));
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
            'category_name'    =>  'required'
        ]);

        $form_data = array(
            'category_name'     =>  $request->category_name,
            'cat_slug'              =>  str_slug($request->category_name)
        );
  
        Categories::whereId($id)->update($form_data);

        return redirect('/admincms/categories')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Categories::findOrFail($id);
        $data->delete();

        return redirect('/admincms/categories')->with('success', 'Data is successfully deleted');
    }
}

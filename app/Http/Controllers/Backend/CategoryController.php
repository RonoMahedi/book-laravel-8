<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::all();
      $parent_categories = Category::where('parent_id',null)->get();
      return view('backend.pages.categories.index',compact('categories','parent_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $category = New Category();

      $category->name = $request->name;
      if(empty($request->slug)){
        $category->slug = Str::slug($request->name);
      }else{
        $category->slug = $request->slug;

      }
      $category->description = $request->description;
      $category->parent_id = $request->parent_id;

      $category->save();

      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // $request->validate([
      //   'name' =>'required|max:50',
      //   'slug' =>'nullable|unique:categories,slug,'.$category->id,
      //   'description' => 'nullable',
      // ])
      $category =  Category::find($id);

      $category->name = $request->name;
      if(empty($request->slug)){
        $category->slug = Str::slug($request->name);
      }else{
        $category->slug = $request->slug;
      }
      $category->parent_id = $request->parent_id;
      $category->description = $request->description;

      $category->save();

      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
      $child_categries = Category::where('parent_id',$category->id)->get();
      foreach($child_categries as $child)
      {
        $child->delete();
      }
      $category->delete();
  Toastr::success('Delete successfully', 'Title', ["positionClass" => "toast-top-right"]);
      return back();
    }
}

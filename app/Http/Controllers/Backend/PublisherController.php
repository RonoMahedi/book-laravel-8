<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $publishers = Publisher::all();
      return view('backend.pages.publishers.index',compact('publishers'));
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
      // $request->validate([
      //   'name' =>'required|max:50',
      //   'link' =>'nullable|url',
      //   'description' =>'nullable',
      // ]);
      $publisher = new Publisher();
      $publisher->name = $request->name;
      $publisher->link = $request->link;
      $publisher->address = $request->address;
      $publisher->outlet = $request->outlet;
      $publisher->description = $request->description;
      $publisher->save();
      Toastr::success('Publisher Create successfully', 'Title', ["positionClass" => "toast-top-right"]);

      return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisher $publisher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $publisher =  Publisher::find($id);
      $publisher->name = $request->name;
      $publisher->link = $request->link;
      $publisher->address = $request->address;
      $publisher->outlet = $request->outlet;
      $publisher->description = $request->description;

      $publisher->save();
      Toastr::success('Publisher Update successfully', 'Title', ["positionClass" => "toast-top-right"]);

      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return back();
    }
}

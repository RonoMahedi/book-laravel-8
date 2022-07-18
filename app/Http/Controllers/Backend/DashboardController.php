<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publisher;
use App\Models\Author;


class DashboardController extends Controller
{
    public function index()
    {
      $data['totol_publisher'] =count(Publisher::all());
      $data['totol_author'] =count(Author::all());
      return view('backend.pages.index',$data);
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Book;
use App\Models\BookAuthor;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = Book::all();
        return view('backend.pages.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $publishers = Publisher::all();
        $authors = Author::all();
        $books = Book::all();
        return view('backend.pages.books.create', compact('categories', 'publishers', 'authors','books'));
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
            'title' => 'required|max:50',
            'category_id' => 'required',
            'publisher_id' => 'required',
            'slug' => 'nullable|unique:books',
            'description' => 'nullable',
            'image' => 'required|image|max:2048',
            'quantity' => 'required|numeric|min:1'
        ],
        [
            'title.required' => 'Please give book title',
            'image.max' => 'Image size can not be greater than 2MB'
        ]);

        $book = new Book();
        $book->title = $request->title;
        if (empty($request->slug)) {
            $book->slug = str_slug($request->title);
        }else{
            $book->slug = $request->slug;
        }
        $book->category_id = $request->category_id;
        $book->publisher_id = $request->publisher_id;
        $book->publish_year = $request->publish_year;
        $book->description = $request->description;
        $book->user_id = 1;
        $book->is_approved = 1;
        $book->isbn = $request->isbn;
        $book->translator_id = $request->translator_id;
        $book->qauntity = $request->quantity;
        $book->save();

        // Image Upload
        if ($request->image) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = time().'-'.$book->id.'.'.$ext;
            $path = "images/books";
            $file->move($path, $name);
            $book->image = $name;
            $book->save();
        }

        // Book Authors
        foreach ($request->author_ids as $id) {
            $book_author = new BookAuthor();
            $book_author->book_id = $book->id;
            $book_author->author_id = $id;
            $book_author->save();
        }
        Toastr::success('Update successfully', 'Title', ["positionClass" => "toast-top-right"]);
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $book = Book::find($id);

    $categories = Category::all();
    $publishers = Publisher::all();
    $authors = Author::all();
    $books = Book::where('id', '!=', $id)->get();
    return view('backend.pages.books.edit', compact('categories', 'publishers', 'authors', 'books', 'book'));
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
      
      $book = Book::find($id);
      $request->validate([
           'title' => 'required|max:50',
           'category_id' => 'required',
           'publisher_id' => 'required',
           'slug' => 'nullable|unique:books,slug,'.$book->id,
           'description' => 'nullable',
           'image' => 'nullable|image|max:2048',
           'quantity' => 'required|numeric|min:1'
       ],
       [
           'title.required' => 'Please give book title',
           'image.max' => 'Image size can not be greater than 2MB'
       ]);


       $book->title = $request->title;
       if (empty($request->slug)) {
           $book->slug = str_slug($request->title);
       }else{
           $book->slug = $request->slug;
       }

       $book->category_id = $request->category_id;
       $book->publisher_id = $request->publisher_id;
       $book->publish_year = $request->publish_year;
       $book->description = $request->description;
       $book->isbn = $request->isbn;
       $book->quantity = $request->quantity;
       $book->translator_id = $request->translator_id;
       $book->quantity = $request->quantity;
       $book->save();

       // Image Upload
       if ($request->image) {

           // Delete Old Image
           if (!is_null($book->image)) {
               $file_path = "images/books/".$book->image;
               if (file_exists($file_path)) {
                   unlink($file_path);
               }
           }

           $file = $request->file('image');
           $ext = $file->getClientOriginalExtension();
           $name = time().'-'.$book->id.'.'.$ext;
           $path = "images/books";
           $file->move($path, $name);
           $book->image = $name;
           $book->save();
       }

       // Book Authors

       // Delete old authors table data
       $book_authors = BookAuthor::where('book_id', $book->id)->get();
       foreach ($book_authors as $author) {
           $author->delete();
       }

       foreach ($request->author_ids as $id) {
           $book_author = new BookAuthor();
           $book_author->book_id = $book->id;
           $book_author->author_id = $id;
           $book_author->save();
       }

        session()->flash('success', 'Category has been updated !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete all child categories
        $child_categories = Category::where('parent_id', $id)->get();
        foreach ($child_categories as $child) {
            $child->delete();
        }

        $category = Category::find($id);
        $category->delete();

        Toastr::success('Delete successfully', 'Title', ["positionClass" => "toast-top-right"]);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all()->toArray();
        //dd($books);
        return new BookResource($books);
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
        $book = new Book;
        $book->book_name=$request->input('book_name');  
        $book->author_name=$request->input('author_name');
        // $book->shelf_no=$request->input('shelf_no');
        // $book->shelf_image="";
        // $book->row_no=$request->input('row_no');
        // $book->column_no=$request->input('column_no');
        // $book->book_image="";
        if($book->save()){
             // $shelf_image = $request->file('shelf_image');
            // if($shelf_image != null){
            //     $ext = $shelf_image->getClientOriginalExtension();
            //     $fileName = rand(10000, 50000) . '.' . $ext;
            //     if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
            //         if($shelf_image->move(public_path(), $fileName)){
            //             $book = Book::find($book->id);
            //             $book->icon = url('/') . '/' . $fileName;
            //             $book->save();
            //         }
            //     }

            // }
            // $book_image = $request->file('book_image');
            // if($book_image != null){
            //     $ext = $book_image->getClientOriginalExtension();
            //     $fileName = rand(10000, 50000) . '.' . $ext;
            //     if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
            //         if($book_image->move(public_path(), $fileName)){
            //             $book = Book::find($book->id);
            //             $book->icon = url('/') . '/' . $fileName;
            //             $book->save();
            //         }
            //     }

            // }
            return new BookResource($book);
        }
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
        //
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
        $book = Book::findorFail($id);
        $book->book_name=$request->input('book_name');  
        $book->author_name=$request->input('author_name');
        // $book->shelf_no=$request->input('shelf_no');
        // $book->shelf_image="";
        // $book->row_no=$request->input('row_no');
        // $book->column_no=$request->input('column_no');
        // $book->book_image="";
        if($book->save()){
             // $shelf_image = $request->file('shelf_image');
            // if($shelf_image != null){
            //     $ext = $shelf_image->getClientOriginalExtension();
            //     $fileName = rand(10000, 50000) . '.' . $ext;
            //     if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
            //         if($shelf_image->move(public_path(), $fileName)){
            //             $book = Book::find($book->id);
            //             $book->icon = url('/') . '/' . $fileName;
            //             $book->save();
            //         }
            //     }

            // }
            // $book_image = $request->file('book_image');
            // if($book_image != null){
            //     $ext = $book_image->getClientOriginalExtension();
            //     $fileName = rand(10000, 50000) . '.' . $ext;
            //     if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
            //         if($book_image->move(public_path(), $fileName)){
            //             $book = Book::find($book->id);
            //             $book->icon = url('/') . '/' . $fileName;
            //             $book->save();
            //         }
            //     }

            // }
            
            return new BookResource($book);
        
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $book = Book::findOrFail($id);
        $book->delete();
        return new BookResource($book);
        
    }
}

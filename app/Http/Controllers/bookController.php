<?php

namespace App\Http\Controllers;

use App\Http\Resources\booksResource;
use App\Models\book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(book $book)
    {
        return booksResource::collection($book::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request,book $book)
    {
       $books =  $book::create([
           'name' => $request->input('name'),
           'author' => $request->input('author'),
        ]);
        return new booksResource($books);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,book $book)
    {

       $books =  $book::create([
        'name' => $request->input('name'),
        'author' => $request->input('author'),
     ]);
     return new booksResource($books);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
         return new booksResource($book);
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
    public function update(Request $request, $id,book $book)
    {
        $book->update([
            'name' => $request->input('name'),
            'author' => $request->input('author'),
        ]);
        return new booksResource($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        $book->delete();
        return response(null, 204);

    }
}

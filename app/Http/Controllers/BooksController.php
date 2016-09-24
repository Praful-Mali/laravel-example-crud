<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Books;


class BooksController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::paginate(50);

        return view('pages.books.index', compact('books'));
    }

    public function add()
    {
        return view('pages.books.add');
    }

    public function edit(Books $book_id)
    {
        $book = $book_id;

        return view('pages.books.edit', compact('book'));
    }

    public function save(Request $request)
    {
        $books = Books::create($request->all());

        flash($books->name.' is saved.', 'success');

        return redirect()->route('books.index');
    }

    public function update(Request $request, Books $book_id)
    {
        $book_id->update($request->all());

        flash($book_id->name.' is updated.', 'success');

        return redirect()->route('books.index');
    }

    public function destroy(Books $book_id)
    {
        $book_id->delete();

        flash($book_id->name.' is deleted.', 'success');

        return redirect()->route('books.index');
    }

    public function search(Request $request){

        $books = Books::where('name', 'LIKE', '%'.$request->get('search').'%')
            ->orWhere('description', 'LIKE', '%'.$request->get('search').'%')
            ->paginate(50);

        return view('pages.books.index', compact('books'));
    }


}

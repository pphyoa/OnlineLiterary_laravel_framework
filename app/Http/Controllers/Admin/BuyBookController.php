<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookFormRequest;
use App\Models\book;
use App\Models\Series;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = book::orderBy('id','DESC')->get();
        $series = Series::all();
        return view('admin.book.index',compact('book','series'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $series = Series::all();
        return view('admin.book.create',compact('user','series'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookFormRequest $request)
    {
        $request->validate([
            'content'=>['required','string','unique:books'],
         ]);
 
 
         $file = $request->file('img');
         $filename = uniqid().'_'.$file->getClientOriginalName();
         $file->move(public_path().'/uploads/',$filename);
 
         book::create([
             'title'=>$request->get('title'),
             'user_id'=>$request->get('user_id'),
             'bulk'=>$request->get('bulk'),
             'content'=>$request->get('content'),
             'img'=>$filename,
             'series_id'=>$request->get('series'),
          ]);
          
          return redirect()->action([BuyBookController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = book::find($id);
        $user = User::find($book->user_id);
        return view('admin.book.show',compact('book','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::find($id);
        $user = Auth::user();
        return view('admin.book.edit',compact('book','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookFormRequest $request, $id)
    {
        $book = book::find($id);
        $file = $request->file('img');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);
 
        $book->title=$request->get('title');
        $book->user_id=$request->get('user_id');
        $book->bulk=$request->get('bulk');
        $book->content=$request->get('content');
        $book->img=$filename;
        $book->update();
        return redirect()->action([BuyBookController::class,'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = book::findOrFail($id);
        $book->delete();
        return redirect()->action([BuyBookController::class,'index']);
    }
}

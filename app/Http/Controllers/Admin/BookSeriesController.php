<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookSeriesFormRequest;
use App\Models\book;
use App\Models\Series;
use Illuminate\Http\Request;

class BookSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function timebook($id)
    {
        $series = Series::all();
        $books = book::where('series_id',$id)->get();     
        return view('admin.book.timebook',compact('series','books'));
    }
    public function engybook($id)
    {
        $series = Series::all();
        $books = book::where('series_id',$id)->get();
        return view('admin.book.timebook',compact('series','books'));
    }
    public function magicbook($id)
    {
        $series = Series::all();
        $books = book::where('series_id',$id)->get();
        return view('admin.book.timebook',compact('series','books'));
    }
    public function gamebook($id)
    {
        $series = Series::all();
        $books = book::where('series_id',$id)->get();
        return view('admin.book.timebook',compact('series','books'));
    }
    public function replacebook($id)
    {
        $series = Series::all();
        $books = book::where('series_id',$id)->get();
        return view('admin.book.timebook',compact('series','books'));
    }
    public function fightbook($id)
    {
        $series = Series::all();
        $books = book::where('series_id',$id)->get();
        return view('admin.book.timebook',compact('series','books'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bookseries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookSeriesFormRequest $request)
    {
        $request->validate([
            'name'=>['required','string','unique:series'],
         ]);
         Series::create([
            'name'=>$request->get('name'),
         ]);
         return redirect()->action([BookSeriesController::class,'create']);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

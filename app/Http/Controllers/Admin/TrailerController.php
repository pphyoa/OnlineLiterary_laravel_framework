<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrailerFormRequest;
use App\Models\Trailer;
use Illuminate\Http\Request;

class TrailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trailers = Trailer::all();
        return view('admin.trailer.index',compact('trailers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/trailer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrailerFormRequest $request)
    {
        $file = $request->file('img');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);
        
        Trailer::create([
          'img'=>$filename,
          'content'=>$request->get('content'),
        ]);

        return redirect()->action([TrailerController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trailer = Trailer::find($id);
        return view('admin.trailer.show',compact('trailer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trailer = Trailer::find($id);
        return view('admin.trailer.edit',compact('trailer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrailerFormRequest $request, $id)
    {
        $trailer = Trailer::find($id);
        $file = $request->file('img');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);
        
       
        $trailer->img=$filename;
        $trailer->content=$request->get('content');
        $trailer->update();
        return redirect()->action([TrailerController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trailer = Trailer::findOrFail($id);
        $trailer->delete();
        return redirect()->action([TrailerController::class,'index']);
    }
}

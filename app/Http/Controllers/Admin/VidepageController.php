<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideFormRequest;
use App\Models\Vide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VidepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vides = Vide::all();
        
        return view('admin.vide.index',compact('vides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.vide.videcreate',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideFormRequest $request)
    {
        $request->validate([
           'vide'=>['required','string','unique:vides']
        ]);


        $file = $request->file('img');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        Vide::create([
            'title'=>$request->get('title'),
            'user_id'=>$request->get('user_id'),
            'vide'=>$request->get('vide'),
            'img'=>$filename,
         ]);
         return redirect()->action([VidepageController::class,'index']);
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
        $editvide = Vide::find($id);
        $user = Auth::user();
        return view('admin.vide.videedit',compact('editvide','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VideFormRequest $request, $id)
    {
        $vide = Vide::find($id);
        $file = $request->file('img');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);


        $vide->title=$request->get('title');
        $vide->user_id=$request->get('user_id');
        $vide->vide=$request->get('vide');
        $vide->img=$filename;
        $vide->update();

        return redirect()->action([VidepageController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $vide = Vide::findOrFail($id);
        $vide->delete();
        return redirect()->action([VidepageController::class,'index']);
    }
}

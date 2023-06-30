<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhrasesFormRequest;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Phrases;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhrasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phrases = Phrases::all();
        return view('admin.phrases.index',compact('phrases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin/phrases/create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhrasesFormRequest $request)
    {
        $request->validate([
            'content'=>['required','string','unique:phrases'],
         ]);
 
 
         $file = $request->file('img');
         $filename = uniqid().'_'.$file->getClientOriginalName();
         $file->move(public_path().'/uploads/',$filename);
 
         Phrases::create([
             'title'=>$request->get('title'),
             'user_id'=>$request->get('user_id'),
             'bulk'=>$request->get('bulk'),
             'content'=>$request->get('content'),
             'img'=>$filename,
          ]);

          return redirect()->action([PhrasesController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phrases = Phrases::find($id);
        $user = User::find($phrases->user_id);
        $likes = Like::where('dailylike_id',$id)->get();
        $comments = Comment::where('commentable_id',$id)->get();
        return view('admin.phrases.show',compact('phrases','user','likes','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phrases = Phrases::find($id);
        $user = User::find($phrases->user_id);
        return view('admin.phrases.edit',compact('phrases','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhrasesFormRequest $request, $id)
    {
         $phrases = Phrases::find($id);
         $file = $request->file('img');
         $filename = uniqid().'_'.$file->getClientOriginalName();
         $file->move(public_path().'/uploads/',$filename);
 

         $phrases->title=$request->get('title');
         $phrases->user_id=$request->get('user_id');
         $phrases->bulk=$request->get('bulk');
         $phrases->content=$request->get('content');
         $phrases->img=$filename;
         $phrases->update();
         return redirect()->action([PhrasesController::class,'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phrases = Phrases::findOrFail($id);
        $phrases->delete();
        return redirect()->action([PhrasesController::class,'index']);
    }
}

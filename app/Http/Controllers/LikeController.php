<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Phrases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
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
        //
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
        $likes = $phrases->likes;
        return view('dailylike',compact('likes'));
    }
    public function like($id)
    {
        $dailylike_id = $id;
        $dailylike_type = 'App\Models\Phrases';
        $user_id = Auth::user()->id;
        $like = new Like();
        $like->user_id = $user_id;
        $like->dailylike_id = $dailylike_id;
        $like->dailylike_type = $dailylike_type;
        $like->like = 1;
        $like->save();

        return redirect()->action([DailyController::class,'index']);
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

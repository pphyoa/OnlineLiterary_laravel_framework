<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProfolio;
use App\Models\User;
use Illuminate\Http\Request;

class ProfolioController extends Controller
{
    public function index()
    {
        return view('profolio');
    }

    public function edit($id)
    {
        $profolio = User::find($id);
        return view('user/backend/createProfolio',compact('profolio'));
    }
    public function update(EditProfolio $request,$id){

        $file = $request->file('file');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        $profolio = User:: find($id);
        $profolio->name = $request->get('name');
        $profolio->email = $request->get('email');
        $profolio->city = $request->get('city');
        $profolio->phone = $request->get('phone');
        $profolio->img = $filename;
        $profolio->relationship = $request->get('relationship');
        $profolio->update();
        return redirect()->action([ProfolioController::class,'index']);
    }
}

@extends('layouts.admin')

@section('title','အွန်းလိုင်းစာပေ')

@section('content')


{{-- wev navigation start  --}}
<div class="navbar container-fluid fixed-top">
    <div class="imgicon">
      <a href="{{url('home')}}">
        <img src="{{asset('img/p1.png')}}" alt="">
        <p>အွန်းလိုင်းစာပေ</p>
      </a>
    </div>
    <form action=""> 
      <input class="form-control" type="search" placeholder="စာစဉ်,စာအုပ်,ဘာသာပြန်ဆရာ... ရှာရန်">
      <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      
    </form>
    <span>
      <i class="fa-regular fa-user"></i>
    </span>
    <p>         
        <i class="fab fa-facebook"></i>
        <i class="fab fa-telegram"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-instagram"></i>
    </p>
</div>
{{-- wev navigation end  --}}

<div class="menu-section">
 <div class="beear">

    <div class="menu-title1">
      <div class="menu-title">
        <div class="myprofilio"> 
          <a href="{{url('admin/index')}}">
            <p>အသုံးပြုသူ</p>
          </a>
        </div>
        
        <div class="myprofilio"><a href="{{url('admin/vide/index')}}">
            <p>စာမြည်း</p></a></div>
        <div class="myprofilio"> <a href="{{url('admin/phrases/index')}}">
            <p>နေ့စဉ်ထွက် စာစဉ်</p></a></div>
        <div class="myprofilio"><a href="{{url('admin/book/create')}}">
            <p>စာအုပ်</p></a></div>
        <div class="myprofilio"><a href="{{url('admin/showingAuthor/index')}}">
            <p>ဘာသာပြန်သူ</p></a></div>
        <div class="myprofilio"><a href="{{url('admin/role/create')}}">
            <p>ရာထူးသတ်မှတ်ချက်</p></a></div>
        <div class="myprofilio"><a href="{{url('admin/trailer/index')}}">
            <p>ကြော်ညာများ</p></a></div>
        <div class="myprofilio"><a href="{{url('user/logout')}}">
            <p>ထွက်ရန်</p></a></div>
    </div>
   </div> 
   <div class="vide">
    <form action="" method="post" enctype="multipart/form-data">         
      <h1>စာမြည်း ပြင်ဆင်ရန်</h1>
      @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p>{{$error}}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>         
      @endforeach
      @if (session('status'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{session('status')}}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @csrf
      <div class="row">
        <div class="col-md-6">
          <label for="title">စာစဉ်အမည်</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$editvide->title}}">
        </div>
        <div class="col-md-6">
          <label for="author">ဘာသာပြန်ဆရာ</label>
          <select class="form-select" aria-label="Default select example" id="author" name="user_id">
            <option value="{{$user->id}}" selected>{{$user->name}}</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="vide">စာမြည်း</label>
        <textarea class="form-control" name="vide" id="vide" cols="20" rows="5">{{$editvide->vide}}</textarea>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="image">ဓာတ်ပုံ</label>
          <input type="file" id="image" name="img" class="form-control" value="{{$editvide->img}}">
        </div>
        <div class="col-md-6">
          <img src="{{asset('uploads/'.$editvide->img)}}" alt="">
        </div>
      </div>
      
      <input type="submit" name="submit" class="btn btn-sm btn-right" value="တင်ရန်">
       
  </form>
   </div>
 

 </div>
</div>


@endsection
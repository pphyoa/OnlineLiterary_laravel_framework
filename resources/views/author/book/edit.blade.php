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
          <a href="{{url('author/profolio')}}">
            <p>အသုံးပြုသူ</p>
          </a>
        </div>
        
        <div class="myprofilio"><a href="{{url('author/vider/index')}}">
            <p>စာမြည်း</p></a></div>
        <div class="myprofilio"> <a href="{{url('author/phrases/index')}}">
            <p>နေ့စဉ်ထွက် စာစဉ်</p></a></div>
        <div class="myprofilio"><a href="{{url('author/book/create')}}">
            <p>စာအုပ်</p></a></div>
        <div class="myprofilio"><a href="{{url('author/trailer/index')}}">
            <p>ကြော်ညာများ</p></a></div>
        <div class="myprofilio"><a href="{{url('user/logout')}}">
            <p>ထွက်ရန်</p></a></div>
    </div>
</div>  
   <div class="vide">
    <form action="" method="post" enctype="multipart/form-data">         
      <h1>စာအုပ် ပြင်ဆင်ရန်</h1>
      @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p>{{$error}}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
         
      @endforeach
      @csrf
      <div class="row">
        <div class="col-md-6">
          <label for="title">စာအုပ်အမည်</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$book->title}}">
        </div>
        <div class="col-md-6">
          <label for="author">ဘာသာပြန်ဆရာ</label>
          <select class="form-select" aria-label="Default select example" id="author" name="user_id">
            <option value="{{$user->id}}" selected>{{$user->name}}</option>
          </select>
        </div>
        <div class="col-md-6">
            <label for="author">စာအုပ်နံပါတ်</label>
            <input type="text" class="form-control" id="author" name="bulk" value="{{$book->bulk}}">
          </div>
        <div class="col-md-6">
            <label for="image">ဓာတ်ပုံ</label>
            <input type="file" id="image" name="img" class="form-control" >
          </div>
      </div>
      <div class="form-group">
        <label for="vide">အကြောင်းရာ</label>
        <textarea class="form-control" name="content" id="vide" cols="20" rows="5">{{$book->content}}</textarea>
      </div>
      
      <input type="submit" name="submit" class="btn btn-sm btn-right" value="တင်ရန်">
       
  </form>
   </div>
 

 </div>
</div>


@endsection
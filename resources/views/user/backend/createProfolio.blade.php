@extends('layouts.allmaster')

@section('title','အွန်းလိုင်းစာပေ')

@section('content')


{{-- wev navigation start  --}}
<div class="navbar container-fluid fixed-top">
  <div class="imgicon">
    <img src="{{asset('img/p1.png')}}" alt="">
    <p>အွန်းလိုင်းစာပေ</p>
  </div>
  <form action=""> 
    <input class="form-control" type="search" placeholder="စာစဉ်,စာအုပ်,ဘာသာပြန်ဆရာ... ရှာရန်">
    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    
  </form>
  @if (Auth::check())
      @if (Auth::user()->hasRole('author'))
        <div class="author-tit">
          <a href="{{url('author/profolio')}}">Author</a>
        </div>
      @else
        <span>
           <i class="fa-regular fa-user"></i>
        </span>
      @endif
  @endif
  
  <p>         
      <i class="fab fa-facebook"></i>
      <i class="fab fa-telegram"></i>
      <i class="fab fa-youtube"></i>
      <i class="fab fa-instagram"></i>
  </p>
</div>
<div class="mobile-nav fixed-top">
<div class="logo">
  <img src="{{asset('img/p1.png')}}" alt="">
  <h3>အွန်းလိုင်းစာပေ</h3>
</div>
@if (Auth::check())
      @if (Auth::user()->hasRole('author'))
        <div class="author-tit">
          <a href="{{url('author/profolio')}}">Author</a>
        </div>         
      @endif
  @endif

<label for="mob-nav"> <i class="fas fa-bars-staggered"></i></label>
<input class="mob-nav" type="checkbox" id="mob-nav" name="mob-nav" hidden>
<div class="mob-nav-wrapper"> 
  <ul> 
  <li> <a href="{{url('profolio')}}">အသုံးပြုသူ</a></li>
  <li> <a href="{{url('home')}}">ပင်မစာမျက်နှာ</a></li>
  <li> <a href="{{url('daily')}}">နေ့စဉ်ထွက် စာစဉ်</a></li>
  <li> <a href="{{url('books')}}">စာအုပ်</a></li>
  <li> <a href="{{url('author')}}">ဘာသာပြန်သူ</a></li>
  <li> <a href="{{url('using')}}">အသုံးပြုပုံ</a></li>
  <li> <a href="{{url('phrases')}}">စာမြည်း</a></li>
  <li> <a href="{{url('user/logout')}}">ထွက်ရန်</a></li>
</ul>
</div>
</div>
{{-- wev navigation end  --}}

<div class="menu-section">
 <div class="beear">

  <div class="menu-title1">
    <div class="menu-title">
      <div class="myprofilio"> 
        <a href="{{url('profolio')}}">
          <i class="fa fa-user"></i>
          <p>အသုံးပြုသူ</p>
        </a>
      </div>
      
      <div class="myprofilio"><a href="{{url('home')}}"><i class="fa fa-house-chimney"></i>
          <p>ပင်မစာမျက်နှာ</p></a></div>
      <div class="myprofilio"> <a href="{{url('daily')}}"><i class="fa fa-copy"></i>
          <p>နေ့စဉ်ထွက် စာစဉ်</p></a></div>
      <div class="myprofilio"><a href="{{url('books')}}"><i class="fa fa-book"></i>
          <p>စာအုပ်</p></a></div>
      <div class="myprofilio"><a href="{{url('author')}}"><i class="fa fa-user-pen"> </i>
          <p>ဘာသာပြန်သူ</p></a></div>
      <div class="myprofilio"><a href="{{url('using')}}"><i class="fa fa-gears"> </i>
          <p>အသုံးပြုပုံ</p></a></div>
      <div class="myprofilio"><a href="{{url('phrases')}}"><i class="fa fa-newspaper"></i>
          <p>စာမြည်း</p></a></div>
      <div class="myprofilio"><a href="{{url('user/logout')}}"><i class="fa fa-newspaper"></i>
          <p>ထွက်ရန်</p></a></div>
  </div>
 </div>
 
   <div class="profolio">
    <div class="editProfolio">
      <form action="" method="post" enctype="multipart/form-data">         
        <h1>Edit My Profolio</h1>
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p>{{$error}}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
         
        @endforeach
        @csrf
        <div class="row">
          <div class="col-md-6">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$profolio->name}}">
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$profolio->email}}">
          </div>
          <div class="col-md-6">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$profolio->city}}">
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="{{$profolio->phone}}">
          </div>
          <div class="col-md-6">
            <label for="file" class="form-label">Photo</label>
            <input type="file" class="form-control" name="file" id="img" value="{{$profolio->img}}">
          </div>
          <div class="col-md-6">
            <label for="relationship" class="form-label">Relationship</label>
            <input type="text" class="form-control" id="relationship" name="relationship" value="{{$profolio->relationship}}">
          </div>
            <input type="submit" class="submit" name="submit" value="Edit Profolio">
        </div>
      
      
    </form>
    </div>
  </div>


 </div>
</div>


@endsection
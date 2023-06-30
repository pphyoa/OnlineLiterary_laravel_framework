
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
 
   <div class="comment-header">
    <div class="comment-body">

      <h2>Likes</h2>
      @foreach ($likes as $likedata)
      <div class="daily-like"> 
        @if ($likedata->user->img == null)
          <div class="likeimg">
            <div class="likeleft">
              <i class="fa fa-user"></i>
            </div>
            <div class="likeright">
              <i class="fa fa-thumbs-up"></i>
            </div>
          </div>
          
        @else()
        <div class="like-second">
          <span>
            <img src="{{asset('uploads/'.$likedata->user->img)}}" alt="">
          </span>
          <i class="fa fa-thumbs-up"></i>
        </div>
        @endif       
        
      <div class="like-box">
          <h3>{{$likedata->user->name}}</h3>
      </div>       
        </div>
        @endforeach  
         

    </div>
  </div>


 </div>
</div>


@endsection
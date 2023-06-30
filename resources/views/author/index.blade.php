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
   <div class="profolio">
    <div class="profolio-bg">
      <div class="pro-lay">
        <div class="left-pro">
            @if ($user->img == null)
              <span>
                 <i class="fa fa-user"></i>
              </span>
            @else()
              <img src='{{asset('/uploads/'.$user->img)}}' alt="">
            @endif
            <div class="author-pro">
                <a href="{{url('author/profolio/edit/'.$user->id)}}"> 
                    <button class="btn btn-sm">
                      <p>Edit </p><i class="fa fa-edit"></i>
                    </button>
                  </a>              
            </div>
        </div>
        <div class="right-pro"> 
          <h1>{{$user->name}}</h1>
          <div class="contact"><i class="fa fa-phone-volume"></i>
            <p>{{ $user->phone}}</p>
          </div>
          <div class="contact1"><i class="fa fa-envelope"></i>
            <p>{{ $user->email}}</p>
          </div>
          <div class="contact2"><i class="fa fa-house-chimney"></i>
            <p>{{$user->city}}</p>
          </div>
          <div class="contact3"><i class="fa fa-heart"></i>
            @if ($user->relationship == null)
            <p>In a relationship</p>
            @else
            <p>{{$user->relationship}}</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
 

 </div>
</div>


@endsection
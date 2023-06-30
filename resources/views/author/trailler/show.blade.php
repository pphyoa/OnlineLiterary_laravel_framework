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

</div>


@endsection
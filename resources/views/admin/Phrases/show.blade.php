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

   <div class="p2alay">
    <div class="naingi">

      <div class="carder"> 
        <div class="card-header">
          <span> <img class="breadcrumb" src="{{asset('uploads/'.$phrases->img)}}"></span>
          <p>{{$phrases->title}}</p>
          <label for="ellicon"> <i class="fa fa-ellipsis-vertical"></i></label>
          <input class="ellicon" type="checkbox" id="ellicon" name="ellicon" hidden>
          <div class="ellicon-wrapper"> 
            <ul> 
              <li> <a href="{{url('admin/phrases/edit/'.$phrases->id)}}">Edit</a></li>
              <li> <a href="{{url('admin/phrases/delete/'.$phrases->id)}}">Delete</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <h1>{{$phrases->bulk}}</h1>
          <p>{{$phrases->content}}</p>
          <div class="like-comment">
            <a href="{{url('author/phrases/like/'.$phrases->id)}}">              
              <p>{{$likes->count()}}</p>
              <p>Likes</p>
            </a>
            <a href="{{url('author/phrases/comment/'.$phrases->id)}}" class="cmt_right">
              <p>{{$comments->count()}}</p>
              <p>comments</p>
            </a>
          </div>
        </div>
       
      </div>
    </div>
  </div>
 

 </div>
</div>


@endsection
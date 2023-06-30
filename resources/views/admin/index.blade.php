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
   <div class="user-table">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">City</th>
          <th scope="col">phone</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr class="moth">          
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->city}}</td>
          <td>{{$user->phone}}</td>   
          <td><a href="{{url('admin/users/edit/'.$user->id)}}"><i class="fa fa-edit"></i></a></td>      
        </tr>  
        @endforeach
      </tbody>
    </table>
   </div>
 

 </div>
</div>


@endsection
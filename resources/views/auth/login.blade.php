@extends('layouts.master')

@section('title','OnlineLiterary')

@section('content')

<div class="loginform">
    <form action="" method="post">      
        <h1>Online Literary Login Form</h1>
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p>{{$error}}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endforeach
        @csrf
        <div class="input-group">
            <input type="email" name="email" id="email" class="" placeholder="Email" >
            <div class="invalid-feedback">Please enter your email!</div>
        </div>
        <div class="input-group">
            <input type="password" name="password" id="password" class="" placeholder="Password" >
            <div class="invalid-feedback">Please enter between 6 and 15 digit password!</div>
            <div class="eye" onclick="showPassword()">
                <i id="click1" class="fa fa-eye"></i>
                <i id="click2" class="fa fa-eye-slash"></i>
            </div>            
        </div>
        <div class="input-group">
            <input type="submit" name="submit" value="Login" class="btn btn-lg">
        </div>
        
    </form>
</div>

@endsection
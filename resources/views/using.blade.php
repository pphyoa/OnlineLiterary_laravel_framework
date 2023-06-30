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
   <div class="usingTo">
    <div class="usingpage">
      <div class="createAcc">
        <h1>အွန်းလိုင်းစာပေမှ အငှားဝင်ဆောင်မူ ရပ်ဆိုင်နည်း</h1>
        <p>
          အငှားဝန်ဆောင်မှုကို ယူထားသူများအနေဖြင့် ဝန်ဆောင်မှုအား ရပ်ဆိုင်းလိုပါက အောက်ပါနည်းလမ်းအတိုင်း ပြုလုပ်ရပါမည်<br><br>
          (၁)Menuထဲမှ ကိုယ်ပိုင် အကောင့်ကို သွားပါါ။<br>
          (၂)ကိုယ်ပိုင်အချက်အလက်ဆိုသော ပုံကိုနှိပ်ပါ။<br>
          (၃)အငှားဝန်ဆောင်မှုရပ်မည် ဆိုသော ခလုတ်ကို နှိပ်ပါ။
        </p>
      </div>
      <div class="createAcc">
        <h1>Facebook Acc ဖြင့် အသုံးပြုပုံ</h1>
        <p>
          Facebook အသုံးပြုသူများသည် လွယ်ကူစွာ အွန်လိုင်းစာပေအကောင့်ကို ရရှိနိုင်ပါသည်။
          Login with facebookနှိပ်၍ အွန်လိုင်းစာပေအကောင့် ပြုလုပ်နိုင်ပါသည်။ရရှိလာသော 
          Facebook အွန်လိုင်းစာပေအကောင့်ကို ယခင်ရှိပြီးသား အွန်လိုင်းစာပေအကောင့်ဖြင့် ချိတ်ဆက်ချင်ပါက
           ကိုယ်ပိုင်အကောင့်ထဲမှ ကိုယ်ပိုင်အချက်အလက်သို့ ဝင်ရောက်၍ လုပ်ဆောင်နိုင်ပါသည်။
        </p>
      </div>
      <div class="createAcc">
        <h1>စာအုပ်များ ဘယ်လိုဝယ်မည်နည်း</h1>
        <p>ဖုန်းဆိုင်များမှ အွန်လိုင်းစာပေ ခဲခြစ် ငွေဖြည့်ကဒ်များဖြင့်ငှင်း ဝယ်ယူဖြည့်သွင်းနိုင်ပါသည်။
          အွန်လိုင်းစာပေ ငွေဖြည့်ကဒ် ဝယ်ယူရရှိနိုင်သော ဖုန်းဆိုင်များမှ စာရင်းကို ကိုယ်ပိုင်အကောင့်အောက်ရှိ ဆိုင်များအား နှိပ်၍ ကြည့်ရူနိုင်ပါသည်။
          ခဲခြစ်ငွေဖြည့်ကဒ်မှ Code ကို ကိုယ်ပိုင်အကောင့်အောက်ရှိ ငွေဖြည့်ရန်အားနှိပ်၍ Code ထည့်သွင်းနိုင်ပါသည်။
        </p>
      </div>
      <div class="createAcc">
        <h1>စာအုပ်များရှာဖွေခြင်း</h1>
        <p>စာအုပ်များကို ကဏအလိုက် ရှာဖွေနိုင်ပါသည်။အခမဲ့ စာအုပ်များ အခမဲ့စာစဉ်များကို Download ရယူနိုင်ပါသည်။
          စာအုပ်များကို စာရေးသူအမည်ဖြင့်ငှင်း စာအုပ်အမျိုးအစားဖြင့်ငှင်း လွယ်ကူစွာ ရှာဖွေနိုင်ပြီး စာအုပ်များတွင် စာအုပ် Sample
          များကိုလည်း အခမဲ့ ရယူနိုင်ပါသည်။
        </p>
      </div>
      <div class="createAcc">
        <h1>အွန်လိုင်းစာပေ အကောင့်၏ လုပ်ဆောင်ချက်များ</h1>
        <p>အွန်လိုင်းစာပေ အကောင့်ကို လွယ်ကူစွာ အသုံးပြုနိုင်ပါသည်။E-mail,phone number, password, confirm password,
           နှင့် address များကို ဖြည့်စွက်၍ Register ကိုနှိပ်ပါ။ အွန်လိုင်းစာပေ အကောင့်မှ ထွက်လိုလျှင် ကိုယ်ပိုင်အကောင့်သို့
           သွား၍ Logout လုပ်နိုင်ပါသည်။
        </p>
      </div>
      <div class="createAcc">
        <h1>စာအုပ်များ ဘယ်လိုထိန်းသိမ်းမလဲ ?</h1>
        <p>ဝယ်ယူပြီးသော စာအုပ်များအား ကိုယ်ပိုင်စာအုပ်စင်တွင် ဝင်ရောက် ဖတ်ရူနိုင်ပါသည်။အွန်လိုင်းစာပေ Application 
          ပျက်စီးသွားခြင်းသော်ငှင်း Firmware တင်၍ ပျောက်ဆုံးသွားခြင်းသော်ငှင်း ကိုယ်ပိုင်အကောင့်ထဲမှ ဝယ်ပြီးစာအုပ်များရယူရန်
          ဝယ်ယူပြီးသား စာအုပ်များကို ပြန်လည်ရယူနိုင်ပါသည်။
        </p>
      </div>
    </div>
  </div>
 
 

 </div>
</div>


@endsection
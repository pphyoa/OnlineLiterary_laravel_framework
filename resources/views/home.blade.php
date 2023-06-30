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
 
    <div class="sliderFrame">
      <div class="slide1">
        <img src="{{asset('img/b1.png')}}" alt="" id="slideimg">
      </div>


      <div class="container">
        <section class="showing-slide slider">
          <div class="slide">
            <img src="{{asset('img/t1.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t2.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t3.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t4.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t5.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t6.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t7.webp')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t8.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t9.webp')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t10.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t11.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t12.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t13.jpg')}}" alt="">
          </div>
          <div class="slide">
            <img src="{{asset('img/t14.jpg')}}" alt="">
          </div>
        </section>
      </div>

      <div class="free-book">
        <h1>စာအုပ်များ</h1>
         <div class="free-page">
         
          @foreach ($books as $book)
              <div class="free-box1">
                <div class="free-text">
                  <img src="{{asset('uploads/'.$book->img)}}">
                  <div class="folde">
                    <p>{{$book->title}}</p>
                    <p>{{$book->bulk}}</p>
                    <p> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-stroke"></i><i class="fa fa-star-half-stroke"></i></p>
                  </div>            
                </div>
                
                <div class="free-paragrap"> 
                  <a href=""><p>ဝယ်ရန်</p></a>
                </div>
              </div>             
          @endforeach
          
        </div> 

      </div>

      <div class="diamond"> 
          <div class="progyi">
            <p>အွန်းလိုင်းစာပေ websiteကို ဝင်ရောက်ကြည့်ရူတဲ့ customer များအားလုံးကို ကျေးဇူးတင်ပါတယ်။မိမိတို့ ကြိုက်နှစ်သက်ရာ ဝတုကို ဖတ်ရူ၍ စိတ်ပင်ပန်းမူတွေ ပြေပျောက်ပါစေကြောင်း ဆုတောင်းပေးအပ်ပါတယ်။</p>
            <div class="customer">
              <img src="{{asset('img/store.jpg')}}">
            </div>
          </div>
      </div> 
      <div class="item">
          <h1>စာမြည်းဖတ်ရန်</h1>
          <div class="fireco">     
            @foreach ($phrases as $phrasesdata)
            <div class="nanga"> 
              <img src="{{asset('uploads/'.$phrasesdata->img)}}">
              <p>{{$phrasesdata->title}}</p>
              <button><a href="{{url('phrases/show/'.$phrasesdata->id)}}">{{$phrasesdata->bulk}}</a></button>
            </div>
            @endforeach      
          
          </div>
      </div>
      <div class="wuxia"> 
          <div class="alpha"> 
            <h1>ဇာတ်လမ်းအကြောင်းရာများ</h1>
            <p>အွန်းလိုင်းစာပေ ဝတုမှ ဇာတ်လမ်းအကြောင်းရာများးကို စိတ်ကြိုက်ရွေးချယ် ဖတ်ရူနိုင်ပါသည်၊၊</p>
            <button> <a href="{{url('books')}}">ကြည့်ရူရန်</a></button>
          </div>
          <div class="category">
            <div class="story1">
              <img src="{{asset('img/t1.jpg')}}">
              <h1>အချိန်ခရီးသွား ဇာတ်လမ်း</h1>
              <p> 
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-stroke"></i>
                <i class="fa fa-star-half-stroke"></i>
              </p>
            </div>
            <div class="story1">
              <img src="{{asset('img/t2.jpg')}}">
              <h1>စွမ်းအင်ကျင့်ကြံခြင်း</h1>
              <p> 
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-stroke"></i>
                <i class="fa fa-star-half-stroke"></i>
              </p>
            </div>
            <div class="story1">
              <img src="{{asset('img/t3.jpg')}}">
              <h1>မှော်ပညာ</h1>
              <p> 
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-stroke"></i>
                <i class="fa fa-star-half-stroke"></i>
              </p>
            </div>
            <div class="story1">
              <img src="{{asset('img/t4.jpg')}}">
              <h1>ဂိမ်းအမျိုးစား</h1>
              <p> 
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-stroke"></i>
                <i class="fa fa-star-half-stroke"></i>
              </p>
            </div>
            <div class="story1">
              <img src="{{asset('img/t5.jpg')}}">
              <h1>ပြန်လည်ဝင်စားခြင်း</h1>
              <p> 
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-stroke"></i>
                <i class="fa fa-star-half-stroke"></i>
              </p>
            </div>
            <div class="story1">
              <img src="{{asset('img/t6.jpg')}}">
              <h1>သိုင်းစာစဉ်</h1>
              <p> 
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-stroke"></i>
                <i class="fa fa-star-half-stroke"></i>
              </p>
            </div>
            
          </div>
      </div>
      <div class="services">
          <h1>အကူညီတောင်းခံရန် </h1>
          <div class="provide">
            <div class="respon1">
              <div class="service-icon"> <i class="fa fa-phone"></i></div>
              <div class="service-text"> 
                <h1>Phone number </h1>
                <p>09-111111111</p>
              </div>
            </div>
            <div class="respon1">
              <div class="service-icon"> <i class="fa fa-envelope"></i></div>
              <div class="service-text"> 
                <h1>Email </h1>
                <p>pphyoa65@gmail.com</p>
              </div>
            </div>
            <div class="respon1">
              <div class="service-icon"> <i class="fa fa-location-dot"></i></div>
              <div class="service-text"> 
                <h1>Location </h1>
                <p>Mingalartaungnyunt , BoMinYaung , st(105)</p>
              </div>
            </div>
            <div class="respon1">
              <div class="service-icon"> <i class="fa fa-message"></i></div>
              <div class="service-text"> 
                <h1>Message</h1>
                <p>09-111111111</p>
              </div>
            </div>
          </div>
      </div>
      <div class="media">
          <h1>ကြော်ညာများ</h1>
          <div class="social">   
            @foreach ($trailer as $trailerdata)
            <div class="watch1">
              <img src="{{asset('uploads/'.$trailerdata->img)}}" alt="Avatar" class="image">
              <div class="overlay">
                <p>{{$trailerdata->content}}</p>
              </div>
            </div>

            @endforeach   
            




            {{-- <div class="watch1">
              <img src="{{asset('img/b2.png')}}" alt="Avatar" class="image">
              <div class="overlay">
                <p>Hello World</p>
              </div>
            </div>
            <div class="watch1">
              <img src="{{asset('img/b3.png')}}" alt="Avatar" class="image">
              <div class="overlay">
                <p>Hello World</p>
              </div>
            </div> --}}

          </div>
      </div>
      <div class="footer"> 
          <p> <i class="fab fa-facebook"></i><i class="fab fa-youtube"></i><i class="fab fa-telegram"></i><i class="fab fa-instagram"></i></p>
          <h1>Copy right @ Developed by Pyae phyo aung</h1>
      </div>
      {{-- </div>  --}}
    </div>


 </div>
</div>


@endsection
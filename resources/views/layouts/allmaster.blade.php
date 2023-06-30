<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('img/p1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/admin.css')}}"> --}}
</head>
<body>

@yield('content')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
<script src="{{asset('js/style.js')}}"></script>

 <script>
var imgArray=[
   "{{asset('img/b1.png')}}",
   "{{asset('img/b2.png')}}",
   "{{asset('img/b3.png')}}",
   "{{asset('img/b4.png')}}",
]


var curIndex=0;
var imgDuration=2000;

function slideShow(){
    document.getElementById('slideimg').src=imgArray[curIndex];
    curIndex++;
    if (curIndex == imgArray.length){curIndex = 0;}
    setTimeout("slideShow()",imgDuration);
}

slideShow();

// for slide 

$(document).ready(function () {
    $(".showing-slide").slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    })
})

</script> 

</body>
</html>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('image/fave.png')}}" type="image/x-icon" />
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/persian-datepicker.min.css')}}">
    @yield('head')
    <script src="{{asset('js/persian-date.min.js')}}"></script>
    <script src="{{asset('js/persian-datepicker.min.js')}}"></script>
    <script src="{{asset('plugin/ir-city-select.min.js')}}"></script>
    <script>
        function activeMenu(n) {
            if (n == 1) {
                $('#prof').addClass('active-a');
                $("#prof").prev().attr("src", "{{asset('image/avatar-active.png')}}");
            }
            if (n == 2) {
                $('#pass').addClass('active-a');
                $("#pass").prev().attr("src", "{{asset('image/password-active.png')}}");
            }
            if (n == 3) {
                $('#addre').addClass('active-a');
                $("#addre").prev().attr("src", "{{asset('image/location-active.png')}}");
            }
            if (n == 4) {
                $('#acti').addClass('active-a');
                $("#acti").prev().attr("src", "{{asset('image/ecommerce-active.png')}}");
            }
            if (n == 5) {
                $('#repo').addClass('active-a');
                $("#repo").prev().attr("src", "{{asset('image/box-active.png')}}");
            }
            if (n == 6) {
                $('#dashb').addClass('active-a');
                $("#dashb").prev().attr("src", "{{asset('image/activ-dashboard.svg')}}");
            }
        }
    </script>
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
<header class="m-0 p-0 header-image d-inline">
    <img src="{{asset('image/header.jpg')}}" class="image-responsiv ">
    <div class="container-fluid">
        <img src="{{asset('image/22222.png')}}" class="image-logo ">
    </div>
</header>
<div class="nav-bar">
    <p class="text-right">
        امروز :
        <span id="navbardate">
cc
        </span>
    </p>

    <a href="{{route('login')}}">
        @if(auth()->check())
            پروفایل
        @else
            حساب کاربری
        @endif
    </a>
</div>

@yield('main')
<br>
<br>
<div class="footer" style="padding: 8px">
    <p style="    font-size: 12px;">
        طراحی و توسعه توسط
        <a href="https://daneshjooyar.com">دانشجویار</a>
    </p>
</div>
<script>
    week = new Array("يكشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه", "شنبه")
    months = new Array("فروردين", "ارديبهشت", "خرداد", "تير", "مرداد", "شهريور", "مهر", "آبان", "آذر", "دي", "بهمن", "اسفند");
    a = new Date();
    d = a.getDay();
    day = a.getDate();
    month = a.getMonth() + 1;
    year = a.getYear();
    year = (year == 0) ? 2000 : year;
    (year < 1000) ? (year += 1900) : true;
    year -= ((month < 3) || ((month == 3) && (day < 21))) ? 622 : 621;
    switch (month) {
        case 1:
            (day < 21) ? (month = 10, day += 10) : (month = 11, day -= 20);
            break;
        case 2:
            (day < 20) ? (month = 11, day += 11) : (month = 12, day -= 19);
            break;
        case 3:
            (day < 21) ? (month = 12, day += 9) : (month = 1, day -= 20);
            break;
        case 4:
            (day < 21) ? (month = 1, day += 11) : (month = 2, day -= 20);
            break;
        case 5:
        case 6:
            (day < 22) ? (month -= 3, day += 10) : (month -= 2, day -= 21);
            break;
        case 7:
        case 8:
        case 9:
            (day < 23) ? (month -= 3, day += 9) : (month -= 2, day -= 22);
            break;
        case 10:
            (day < 23) ? (month = 7, day += 8) : (month = 8, day -= 22);
            break;
        case 11:
        case 12:
            (day < 22) ? (month -= 3, day += 9) : (month -= 2, day -= 21);
            break;
        default:
            break;
    }
    var persiandate = " " + week[d] + " " + day + " " + months[month - 1] + " " + year;
    document.getElementById('navbardate').innerHTML = persiandate;
</script>
{{--<script src="{{asset('js/app.js')}}"></script>--}}
<script src="{{asset('js/bootstrap.js')}}"></script>
<script>
    function changename(name) {
        document.getElementById('usersname').innerText = name;
    }

    function changepoint(point) {
        document.getElementById('userspoints').innerText = point;
    }

    function changeprog(per) {
        $('#userspointpercent').css('width', per);
    }

    @if(auth()->check())
    $(document).ready(function () {
        changename('{{auth()->user()->name}}');
        changepoint('{{session('point')}} , {{session('khoshe')}}');
        changeprog('{{session('percent')}}');
    });
    @endif
</script>
@yield('script')

<script>

    $('.carousel').carousel({
        interval: false,
    });
    $('.nav-link').click(function () {
        $('.active-nav-link').removeClass('active-nav-link');
        $(this).addClass(' active-nav-link');
    })

    function checkpass() {
        var pass = document.getElementById('password1').value;

        if (pass != pass) {
            $('.wrong-pass').text(" رمز عبور و تکرار آن یکسان نیست");
            $('.wrong-pass').show();
            document.getElementById('singup').disabled = true;
        } else {
            $('.wrong-pass').hide();
            document.getElementById('singup').disabled = false;
        }
        if (pass.length < 8) {
            $('.wrong-pass').text(" رمز عبور شما کمتر از 8 رقم میباشد!");
            $('.wrong-pass').show();
            document.getElementById('singup').disabled = true;
        }

    }


</script>

</body>
</html>



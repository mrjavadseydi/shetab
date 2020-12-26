@extends('master.master')
@section('main')
    <div class="container">
        <div class="center-image">
            @if ($errors->any())
                <div class="alert alert-danger p-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block p-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @elseif($message = Session::get('danger'))
                <div class="alert alert-danger alert-block p-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <img src="{{asset('image/center-logo.svg')}}" class="p-2 pt-1">
            <div class="card text-center card-center shadow">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active-nav-link" data-target="#carouselExampleControls" href="#"
                               data-slide-to="0">ورود </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-target="#carouselExampleControls" href="#" data-slide-to="1">ثبت
                                نام </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-right">
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div>
                                        <label for="email" class="label">
                                        <span>
                                            *
                                        </span>
                                            ایمیل
                                        </label>
                                        <br>
                                        <input name="email" required type="email" placeholder="example@example.com"
                                               id="email"
                                               class="col-12 input">
                                    </div>
                                    <div class="">
                                        <label for="password" class="label pt-2">
                                        <span>
                                            *
                                        </span>
                                            رمز عبور
                                        </label>
                                        <br>
                                        <p class="alert alert-danger wrong-login" role="alert" style="display: none">

                                        </p>
                                        <input name="password" required type="password" placeholder="******"
                                               id="password"
                                               class="col-12 input">
                                    </div>
                                    <br>
                                    <input class="btn btn-success w-100 pt-2" value="ورود به سایت " type="submit">
                                </form>
                                <br>
                                <div class="text-center">
                                    <a class="reset-pasword" data-target="#carouselExampleControls" href="#"
                                       data-slide-to="2">بازیابی رمز عبور</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <form method="post" action="{{route('createUser')}}" id="singup-right">
                                    @csrf
                                    <div>
                                        <label for="name2" class="label">
                                        <span>
                                            *
                                        </span>
                                            نام و نام خانوادگی
                                        </label>
                                        <br>
                                        <input name="name" required type="text" placeholder="محمد علی پارسا " id="name2"
                                               class="col-12 input pt-2" style="direction: rtl">
                                    </div>
                                    <div>
                                        <label for="email1" class="label pt-2">
                                        <span>
                                            *
                                        </span>
                                            ایمیل
                                        </label>
                                        <br>
                                        <input name="email" required type="email" placeholder="example@example.com"
                                               id="email1"
                                               class="col-12 input">
                                    </div>
                                    <div>
                                        <label for="email1" class="label pt-2">
                                        <span>
                                            *
                                        </span>
                                            تلفن همراه
                                        </label>
                                        <br>
                                        <input name="mobile" required type="text" placeholder="09154000000" id="email1"
                                               class="col-12 input">
                                    </div>
                                    <div class="">
                                        <label for="maghta" class="label pt-2">
                                            <p>
                                                *
                                            </p>
                                            مقطع
                                        </label>
                                        <br>
                                        <select class="form-control pt-2 mt-2"
                                                id="exampleFormControlSelect1" name="category">
                                            <option>کارشناسی</option>
                                            <option>کارشناسی ارشد</option>
                                            <option>دکتری</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <label for="maghta" class="label pt-2">
                                            <p>
                                                *
                                            </p>
                                            دانشکده
                                        </label>
                                        <br>
                                        <select name="university" class="form-control pt-2 mt-2"
                                                id="exampleFormControlSelect2" >
                                            <option>انتخاب کنید !</option>
                                            @foreach(\App\University::all() as $u)
                                                <option value="{{$u['id']}}">{{$u['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="">
                                        <label for="maghta" class="label pt-2">
                                            <p>
                                                *
                                            </p>
                                            گروه
                                        </label>
                                        <br>
                                        <select name="group" class="form-control pt-2 mt-2"
                                                id="exampleFormControlSelect11">
                                        </select>
                                    </div>
                                    <div class="">
                                        <label for="password1" class="label pt-2">
                                        <span>
                                            *
                                        </span>
                                            رمز عبور
                                        </label>
                                        <br>
                                        <input name="password" required type="password" onkeyup="checkpass()"
                                               placeholder="******" id="password1"
                                               class="col-12 input">
                                    </div>
                                    {{--                                <div class="">--}}
                                    {{--                                    <label for="cpassword" class="label pt-2">--}}
                                    {{--                                        <span>--}}
                                    {{--                                            *--}}
                                    {{--                                        </span>--}}
                                    {{--                                        تکرار رمز عبور--}}
                                    {{--                                    </label>--}}
                                    {{--                                    <br>--}}
                                    {{--                                    <input required type="password" onkeyup="checkpass()" placeholder="******" id="cpassword"--}}
                                    {{--                                           class="col-12 input">--}}
                                    {{--                                </div>--}}
                                    <br>
                                    <p class="alert alert-danger wrong-pass" role="alert" style="display: none">

                                    </p>
                                    <input disabled id="singup" class="btn btn-success w-100 pt-2" value="ثبت نام "
                                           type="submit">
                                </form>
                            </div>
                            <div class="carousel-item">
                                <form action="{{ route('password.email') }}" method="post">
                                    @csrf
                                    <div class="">
                                        <p class="text-right">
                                            کاربر عزیز ایمیل خود را در کادر زیر وارد کرده و دکمه فراموشی رمز عبور را
                                            بزنید و
                                            رمز حساب خود را از طریق ایمیلتان تغییر دهید
                                        </p>
                                        <label for="email1" class="label float-right">
                                        <span>
                                            *
                                        </span>
                                            ایمیل
                                        </label>
                                        <br>
                                        <input name="email" required type="email" placeholder="example@example.com"
                                               id="email1"
                                               class="col-12 input">
                                    </div>
                                    <br>
                                    <input class="btn btn-success w-100 pt-2" value="بازیابی رمز عبور " type="submit">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#exampleFormControlSelect2').change(function () {
                var selectedCountry = $(this).children("option:selected").val();
                if(selectedCountry.length>0){
                    $.get("getSub/"+selectedCountry, function(data, status){
                        $('#exampleFormControlSelect11').empty().append(data);
                    });
                }
            });
        });

    </script>
    @endsection

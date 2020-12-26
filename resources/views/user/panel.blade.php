@extends('master.master')
@section('main')
    <div class="container-fluid">

        <div class="row pt-4">
            <div class="col-md-3 text-right mb-2 font-weight-bold">
                کاربر گرامی خوش آمدید !
            </div>
            <div class="col-md-9  ltr">
                <div class="progress">
                    <div class="progress-bar bg-success" id="userspointpercent" role="progressbar" style=""
                         aria-valuenow="55"
                         aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <p class="text-center p-2">
                    امتیاز شما :
                    <span id="userspoints">
                        (!{%point%}!)
                    </span>
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col-md-2 text-right card redius spa shadow m-auto">
                <img src="{{asset('image/profile.png')}}" class="rounded-circle m-auto img-profile pt-2">
                <a  href="{{route('profile')}}" style="color: white;text-decoration: none">
                    <div class=" edit-circle">
                        <i class="fal fa-edit" aria-hidden="true"></i>
                    </div>
                </a>
                <span class="text-center font-weight-bold" id="usersname">
                    (!{%name%}!)
                </span>
                <ul class="ul-menu float-right">
                    @can('admin')
                        <li>
                            <img src="{{asset('image/avatar.png')}}">
                            <a href="{{route('adminPanel')}}" id="dash" class="">
                                پنل مدیریت
                            </a>
                        </li>
                    @endcan
                    <li>
                        <img src="{{asset('image/avatar.png')}}">
                        <a href="{{route('profile')}}" id="prof" class="">
                            اطلاعات کاربری
                        </a>
                    </li>
                    <li>
                        <img src="{{asset('image/user-password.png')}}">
                        <a href="{{route('pass')}}" id="pass" class="">
                            تغییر رمز عبور
                        </a>
                    </li>
                    <li>
                        <img src="{{asset('image/location.png')}}">
                        <a href="{{route('adr')}}" class="" id="addre">
                            آدرس ها
                        </a>
                    </li>
                    <li>
                        <img src="{{asset('image/ecommerce.png')}}">
                        <a href="{{route('action.create')}}" class="" id="acti">
                            ثبت فعالیت
                        </a>
                    </li>
                    <li>
                        <img src="{{asset('image/box.png')}}">
                        <a href="{{route('action.index')}}" class="" id="repo">
                            گزارش فعالیت ها
                        </a>
                    </li>
                    <li>
                        <img src="{{asset('image/log-out.png')}}">


                        <label for="logout" id="exi">

                            خروج


                        </label>

                    </li>

                    <form action="{{route('logout')}}" method="post" style="display: none">

                        <input type="submit" id="logout" style="display: none">
                        @csrf
                    </form>
                </ul>
            </div>

            @yield('card')
        </div>
    </div>

@endsection
@section('script')

    @yield('script')

@endsection

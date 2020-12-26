@extends('user.panel')
@section('head')

@endsection
@section('card')
    <div class="col-md-9  card redius shadow card-height">
        <div class=" pt-3 text-right d-inline">
                <span id="menu-title">
                     داشبورد
                </span>
        <div>
            <a href="" class="mt-3 alert alert-danger d-block" role="alert">
                اخطار شما 6 کار ناتمام  دارید!
            </a>
            <div class="row">
            <p class="title col-6">
                میزان امتیازات شما :
                <span>
                    12345
                </span>
            </p>
            <p class="title col-6">
                تعداد فعالیت های ثبت شده شما :
                <span>
                    15
                </span>
            </p>
            </div>
            <br>

            <p class="title">
                تعداد فعالیت های تایید شده  :
                <span>
                    5
                </span>
            </p>
        </div>
        </div>
    </div>

        @endsection
        @section('script')
            <script>

            </script>
@endsection

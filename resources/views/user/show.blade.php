@extends('user.panel')
@section('head')
    <link rel="stylesheet" href="{{asset('plugin/datatables.css')}}">
    <style>

        .btn-group > button {
            background-color: white !important;
            color: #8e8e8e !important;
            border-radius: 5px !important;
            margin-left: 2px !important;
            font-size: 1em;
        }

        #posts_filter {
            float: left;
        }

        #posts_info {
            float: right;
        }

        #posts_paginate {
            margin: 0 3px;
            float: left;
        }
    </style>

@endsection
@section('card')
    <div class="col-md-9  card redius shadow card-height">
        <div class=" pt-3 text-right d-inline">
                <span id="menu-title">
                مشاهده فعالیت
                </span>
        </div>
        <div class="table-responsive overflow-hidden">
            <div class="card-body pad table-responsive text-right">
                <div class="">
                    <div class=" ">
                        <div class="col-md-12">
                                <span>
                                    عنوان فعالیت:
                                </span>
                            <strong>
                                {{$action['title']}}
                            </strong>
                        </div>


                    </div>
                    <div class="d-flex pt-1">
                        <div class="col-md-6">
                                <span>
                                    طبقه فعالیت :
                                </span>
                            <strong>
                                {{$action->Category()->first()->name}}

                            </strong>
                        </div>
                        <div class="col-md-6">
                                <span>
                                     نوع فعالیت :
                                </span>
                            <strong>
                                {{$action->SubCategory()->first()->name}}
                            </strong>
                        </div>
                    </div>
                    <div class="p-2">
                            <span>
                                توضیحات:
                            </span>
                        <p>
                            {{$action->description}}
                        </p>
                    </div>
                    @if($action->document()->count()>0)
                        <hr>
                        <h3 class="text-center">مستندات</h3>
                        <div class="table-responsive p-2 col-6">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>ردیف</td>
                                    <td>مشاهده مستند</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($action->document()->get() as $r => $m)
                                    <tr>
                                        <td>{{$r+1}}</td>
                                        <td>
                                            <a href="{{asset('UserDocument')."/$m->file"}}">
                                                  <span class="badge badge-info">
                                                جهت مشاهده کلیک کنید
                                                  </span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    <hr>
                    <h3 class="text-center">وضعیت فعالیت</h3>

                        <div class="p-2">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="pt-2">
                                        <p>وضعیت فعالیت :
                                            @if($action->status==0)
                                                <span class="badge badge-danger">
                                    نیاز به بررسی
                                            </span>
                                            @elseif($action->status==1)
                                                <span class="badge badge-success">
                                تایید شد!
                                         </span>
                                            @else
                                                <span class="badge badge-warning">
                                رد شده
                                        </span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 ">

                                    @if($action->status==1)
                                        <div class="d-flex">
                                                <span class="pt-2">
                                            امتیاز دریافتی :
                                                    <strong>{{$action->points}}</strong>
                                                    </span>
                                        </div>
                                    @elseif($action->status==2)
                                        <div class="pt-1">
                                            امتیاز دریافتی :
                                            <span class="badge badge-danger">
                                                0
                                                </span>
                                        </div>

                                    @endif

                                </div>
                            </div>
                            @if($action->status==2)
                                <div class="d-flex">
                                    <div class="col-md-8">
                                        <div class="p-2">

                                            علت رد :
                                            <strong>
                                                {{$action->Status()->first()->description}}
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="p-2">

                                            رد شده توسط :
                                            <strong>
                                                        <span class="badge badge-info">
                                                            {{$action->Status()->first()->User()->first()->name}}
                                                        </span>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                </div>
            </div>


        </div>

    </div>



@endsection
@section('script')

@endsection

@extends('user.panel')
@section('card')
    <div class="col-md-9  card redius shadow card-height">
        <div class=" pt-3 text-right d-inline">
                <span id="menu-title">
                    اطلاعات کاربری
                </span>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger p-2 text-right">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block p-2 text-right">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @elseif($message = Session::get('danger'))
            <div class="alert alert-danger alert-block p-2 text-right">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="user-form col-md-12 p-0">
            <form action="{{route('user.meta')}}" enctype="multipart/form-data" method="post" class="text-right pt-3">
                @csrf
                <div class="d-md-flex m-0 pt-2">
                    <div class="col-md-6 col-sm-12">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                            نام و نام خانوادگی
                        </label>
                        <br>
                        <input required type="text" placeholder="محمد علی پارسا " disabled
                               @if(isset($info[0]))
                                   value="{{$info[0]}}"
                               @endif

                               id="name2"
                               class="col-12 input pt- ltr" style="direction: rtl">
                    </div>
                    <div class="col-md-6 col-sm-12 ">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                            شماره دانشجویی
                        </label>
                        <br>
                        <input required type="text" name="student_number" placeholder="98123250000" id="name2"
                               @if(isset($info[0])&&$info[1]!=123456)
                               value="{{$info[1]}}"
                               @endif

                               class="col-12 input pt-2" style="direction: rtl">
                    </div>
                </div>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                            نام و نام خانوادگی (لاتین)
                        </label>
                        <br>
                        <input required type="text" name="name_en" placeholder="mohammad ali parsa" id="name2"
                               @if(isset($info[0])&&$info[2]!='EMPTY')
                               value="{{$info[2]}}"
                               @endif
                               class="col-12 input pt-2" style="direction: rtl">
                    </div>
                    <div class="col-md-6 col-sm-12 ">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                            کد ملی
                        </label>
                        <br>
                        <input required type="text" name="national_number" placeholder="06501784500" id="name2"
                               @if(isset($info[0])&&$info[3]!=123456)
                               value="{{$info[3]}}"
                               @endif
                               class="col-12 input pt-2" style="direction: rtl">
                    </div>
                </div>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-md-6 col-sm-12 ">
                        <label for="maghta" class="label d-inline">
                            <p>
                                *
                            </p>
                            مقطع
                        </label>
                        <br>
                        <select name="class" class="form-control pt-2 mt-2" id="exampleFormControlSelect1" name="maghta">
                            @if(isset($info[0]))
                            <option
                            @if($info[4]=='کارشناسی')
                                selected
                            @endif
                            >کارشناسی </option>
                            <option
                                @if($info[4]=='کارشناسی ارشد')
                                selected
                                @endif
                            >کارشناسی ارشد</option>
                            <option
                                @if($info[4]=='دکتری')
                                selected
                                @endif
                            >دکتری</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                         رشته
                        </label>
                        <br>
                        <input name="field_study" required type="text" placeholder="مهندسی کامپیوتر" id="name2"
                               @if(isset($info[0])&&$info[5]!=123454)
                               value="{{$info[5]}}"
                               @endif
                               class="col-12 input pt-2" style="direction: rtl">
                    </div>
                </div>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-md-6 col-sm-12 ">
                        <label for="maghta" class="label d-inline">
                            <p>
                                *
                            </p>
                            دانشکده
                        </label>
                        <br>
                        <select name="class" class="form-control pt-2 mt-2" disabled id="exampleFormControlSelect1" name="maghta">
                            <option>{{$info[9]}}</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12 ">
                        <label for="maghta" class="label d-inline">
                            <p>
                                *
                            </p>
                            گروه
                        </label>
                        <br>
                        <select name="class" class="form-control pt-2 mt-2" disabled id="exampleFormControlSelect1" name="maghta">
                            <option>{{$info[10]}}</option>
                        </select>
                    </div>
                </div>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                            تلفن همراه
                        </label>
                        <br>
                        <input name="mobile"  required type="text" placeholder="09354780000" id="name2"
                                @if(isset($info[0])&&$info[6]!=123454)
                                value="{{$info[6]}}"
                                @endif
                               class="col-12 input pt-2" style="direction: rtl">
                    </div>
                    <div class="col-md-6 col-sm-12 ">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                            ایمیل
                        </label>
                        <br>
                        <input  type="email" placeholder="example@example.com" id="name2" disabled
                               @if(isset($info[0]))
                               value="{{$info[7]}}"
                               @endif
                               class="col-12 input pt-2 ltr" style="direction: rtl">
                    </div>
                </div>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="" class="label d-inline">
                            <p>
                                *
                            </p>
                            تاریخ تولد
                        </label>
                        <br>
                        <input name="birthday" required type="text" placeholder="09354780000" id="birth"
                               @if(isset($info[0])&&$info[8]!='123')
                               value="{{$info[8]}}"
                               class="col-12 input pt-2"
                               @else
                               class="col-12 input pt-2 observer-example"
                               @endif
                               style="direction: rtl">
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="" class="label d-inline">
                            <p>
                                *
                            </p>
                            عکس پروفایل
                        </label>
                        <br>
                        <p class="d-inline secondary-p">
                            حداکثر :5MB
                        </p>
                        <label for="file" id="file-lable" class="btn btn-secondary text-center col-md-9 input">
                            <i class="fal fa-upload"></i>
                            ارسال فایل
                        </label>
                        <input name="profile" type="file" id="file" class="d-none custom-file-input">
                    </div>

                </div>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-12 mb-5">
                        <div class="text-left">
                            <input type="submit" class="btn btn-success col-md-2 text-center"
                                   value="ذخیره تغییرات ">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection
@section('script')

<script>
    activeMenu(1);

    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $('#file-lable').text(fileName);

    });
    $('#birth').click(function () {
        $('#birth').addClass('observer-example');
        $('.observer-example').persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD',
        });
    })
    $('.observer-example').persianDatepicker({
        observer: true,
        format: 'YYYY/MM/DD',
    });
</script>
@endsection

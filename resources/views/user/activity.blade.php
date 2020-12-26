@extends('user.panel')
@section('card')
    <div class="col-md-9  card redius shadow card-height">
        <div class=" pt-3 text-right d-inline">
                <span id="menu-title">
                  ثبت فعالیت
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
            <form enctype="multipart/form-data" action="{{route('action.store')}}" method="post" class="text-right pt-3">
                @csrf
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-md-12 col-sm-12">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                            عنوان فعالیت
                        </label>
                        <br>
                        <input name="title" required type="text" placeholder="کسب رتبه " id="name2"
                               class="col-12 input pt-2" style="direction: rtl">
                    </div>
                </div>
                <div class="d-md-flex m-0 pt-2 ">
                    <div class="col-md-12 col-sm-12">
                        <label for="exampleFormControlSelect2" class="label d-inline">
                            <p>
                                *
                            </p>
                            بخش فعالیت
                        </label>
                        <br>
                        <select class="form-control pt-2 mt-2" id="exampleFormControlSelect2">
                            <option>انتخاب کنید</option>
                            @foreach($main as $s)
                                <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="d-md-flex m-0 pt-2 ">
                    <div class="col-md-6 col-sm-12">
                        <label for="exampleFormControlSelect1" class="label d-inline">
                            <p>
                                *
                            </p>
                            طبقه فعالیت
                        </label>
                        <br>
                        <select name="category" class="form-control pt-2 mt-2" id="exampleFormControlSelect1" >
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="exampleFormControlSelect11" class="label d-inline">
                            <p>
                                *
                            </p>
                            نوع فعالیت
                        </label>
                        <br>
                        <select  name="subcategory"  class="form-control mt-2 pt-2" id="exampleFormControlSelect11" name="city">
                        </select>
                    </div>

                </div>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="" class="label d-inline">
                            <p>
                                *
                            </p>
                            تاریخ فعالیت
                        </label>
                        <br>
                        <input name="date" required type="text" placeholder="09354780000" id=""
                               class="col-12 input pt-2 observer-example" style="direction: rtl">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="" class="label d-inline">
                            <p>
                                *
                            </p>
                            مستندات
                        </label>
                        <br>
                        <p class="d-inline secondary-p">
                            حداکثر :5MB
                        </p>
                        <label for="file" id="file-lable" class="btn btn-secondary text-center col-md-9 input">
                            <i class="fal fa-upload"></i>
                            ارسال فایل
                        </label>
                        <input name="file" type="file" id="file" class="d-none custom-file-input">
                    </div>

                </div>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="form-group">
                            <label for="name2" class="label d-inline">
                                <p>
                                    *
                                </p>
                                شرح فعالیت
                            </label>
                            <textarea name="description" class="form-control" placeholder="شرح فعالیت" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                </div>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-12 mb-5">
                        <div class="text-left">
                            <input type="submit" class="btn btn-success col-md-2 text-center"
                                   value="ثبت فعالیت">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection
@section('script')

    <script>
        activeMenu(4);

        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $('#file-lable').text(fileName);

        });
        $('.observer-example').persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD',
        });
        $(document).ready(function(){
            $('#exampleFormControlSelect1').change(function () {
                var selectedCountry = $(this).children("option:selected").val();
                if(selectedCountry.length>0){
                    $.get("getSub/"+selectedCountry, function(data, status){
                        $('#exampleFormControlSelect11').empty().append(data);
                    });
                }
            });
            $('#exampleFormControlSelect2').change(function () {
                var selectedCountry = $(this).children("option:selected").val();
                if(selectedCountry.length>0){
                    $.get("getCat/"+selectedCountry, function(data, status){
                        $('#exampleFormControlSelect1').empty().append(data);
                        $('#exampleFormControlSelect11').empty();
                    });
                }
            });
        });
    </script>
@endsection

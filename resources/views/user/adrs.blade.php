@extends('user.panel')
@section('card')
    <div class="col-md-9  card redius shadow card-height">
        <div class=" pt-3 text-right d-inline">
                <span id="menu-title">
                   آدرس
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
        @if(count($address)>0)
            @foreach($address as $a)
        <p class="text-right p-2 m-2">
           <strong> آدرس فعلی</strong>
            <br>
            استان :
                {{$a->province}}
            <br>
            شهر:
                {{$a->city}}
            <br>
            کد پستی:
                {{$a->post_cod}}
            <br>
            آدرس :
            {{$a->address}}

        </p>
            @endforeach
        @endif
        @if(count($address)>0)
        <p class="text-center"><strong>ثبت آدرس جدید</strong></p>
        @endif
        <div class="user-form col-md-12 p-0">
            <form action="{{route('user.address')}}" method="post" class="text-right pt-3">
                <div class="d-md-flex m-0 pt-2 ir-select">
                    <div class="col-md-6 col-sm-12">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                            استان
                        </label>
                        <br>
                        <select class="form-control pt-2 ir-province" id="exampleFormControlSelect1" name="province">

                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                            شهرستان
                        </label>
                        <br>
                        <select class="form-control ir-city pt-2" id="exampleFormControlSelect1" name="city">
                        </select>
                    </div>

                </div>
                <div class="d-md-flex m-0 pt-3">

                    <div class="col-md-12 col-sm-12 ">
                        <label for="name2" class="label d-inline">
                            <p>
                                *
                            </p>
                            کد پستی
                        </label>
                        <br>
                        <input name="postcode" required type="text" placeholder="9719787547" id="name2"
                               class="col-12 form-control pt-2" style="direction: rtl">
                    </div>
                </div>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="form-group">
                            <label for="name2" class="label d-inline">
                                <p>
                                    *
                                </p>
                                آدرس
                            </label>
                            <textarea name="address" class="form-control" placeholder="بیرجند -خیابان ... " id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                </div>
                @csrf
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
        activeMenu(3);

        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $('#file-lable').text(fileName);

        });
        $('.observer-example').persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD',
        });
    </script>
@endsection

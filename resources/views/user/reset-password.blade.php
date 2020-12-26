@extends('user.panel')
@section('card')
    <div class="col-md-9  card redius shadow card-height">
        <div class=" pt-3 text-right d-inline">
                <span id="menu-title">
                    تغییر رمز عبور
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
            <form action="{{route('update.password')}}" method="post" class="text-right pt-3">
                @csrf
                <div class="d-md-flex m-0 pt-2">
                    <div class="col-md-4 col-sm-12">
                        <label for="password" class="label d-inline">
                            <p>
                                *
                            </p>
                            رمز عبور کنونی
                        </label>
                        <br>
                        <input name="password" onkeyup="checkpass1()" required type="password" placeholder="*****" id="password"
                               class="col-12 input pt- ltr" style="direction: rtl">
                    </div>
                    <div class="col-md-4 col-sm-12 ">
                        <label for="password1" class="label d-inline">
                            <p>
                                *
                            </p>
                            رمز عبور جدید
                        </label>
                        <br>
                        <input name="newpassword" onkeyup="checkpass1()" required type="password" placeholder="******" id="password1"
                               class="col-12 input pt-2" style="direction: rtl">
                    </div>
                    <div class="col-md-4 col-sm-12 ">
                        <label for="cpassword" class="label d-inline">
                            <p>
                                *
                            </p>
                            تکرار رمز عبور
                        </label>
                        <br>
                        <input name="confirmpassword" required type="password" onkeyup="checkpass1()" placeholder="*****" id="cpassword"
                               class="col-12 input pt-2" style="direction: rtl">
                    </div>

                </div>
                <p class="alert alert-danger wrong-pass m-3" role="alert" style="display: none">

                </p>
                <div class="d-md-flex m-0 pt-3">
                    <div class="col-12 mb-5">
                        <div class="text-left">
                            <input type="submit" id="reset" disabled class="btn btn-success col-md-2 text-center"
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
        activeMenu(2);
        function checkpass1() {
            var pass = document.getElementById('password1').value;
            var cpass = document.getElementById('cpassword').value;
            var orpass = document.getElementById('password').value;
            if(orpass.length<8){
                $('.wrong-pass').text(" رمز عبور قبلی شما نا معتبر میباشد ");
                $('.wrong-pass').show();
                document.getElementById('reset').disabled = true;
            }else{
                $('.wrong-pass').hide();
            }
            if(pass!=cpass){
                $('.wrong-pass').text(" رمز عبور و تکرار آن یکسان نیست");
                $('.wrong-pass').show();
                document.getElementById('reset').disabled = true;
            }else{
                $('.wrong-pass').hide();
                document.getElementById('reset').disabled = false;
            }
            if(pass.length<8){
                $('.wrong-pass').text(" رمز عبور شما کمتر از 8 رقم میباشد!");
                $('.wrong-pass').show();
                document.getElementById('reset').disabled = true;
            }

        }
    </script>
@endsection

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

                <!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->
                <style>
                    table.GeneratedTable {
                        width: 100%;
                        background-color: #ffffff;
                        border-collapse: collapse;
                        border-width: 2px;
                        border-color: #ffcc00;
                        border-style: solid;
                        color: #000000;
                    }

                    table.GeneratedTable td, table.GeneratedTable th {
                        border-width: 2px;
                        border-color: #ffcc00;
                        border-style: solid;
                        padding: 3px;
                    }

                    table.GeneratedTable thead {
                        background-color: #ffcc00;
                    }
                    .noborder{
                        border: 0px !important;
                    }
                </style>
                    <br>
                <p>
                    هر امتیاز  معادل ریالی آن  در شورای استعداد های درخشان مصوب خواهد شد که در سال 99-98 برابر 10000 ریال تعیین شد .
                    <br>
                    50 درصد این عدد  به صورت نقدی و مابقی در قالب اعتبارهای جدول زیر  اعطا می شود.
                </p>
                <table class="GeneratedTable">
                    <thead>
                    <tr>
                        <th>نوع اعتبار</th>
                        <th>تسهیلات  </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="noborder">آموزشی</td>
                        <td>امکان اخذ ده واحد درسی اضافه (بدون شهریه)</td>
                    </tr>
                    <tr>
                        <td class="noborder"></td>

                        <td>اولویت در حق التدریس برای دانشجویان ارشد و دکتری</td>
                    </tr>
                    <tr>
                        <td class="" style="border-bottom:0 !important; "></td>

                        <td>دسترسی رایگاه به  منابع کتابخانه مرکزی</td>
                    </tr>
                    <tr>
                        <td class="noborder"></td>

                        <td>امکان به امانت گرفتن سه کتاب اضافه از کتابخانه مرکزی</td>
                    </tr>
                    <tr>
                        <td class="noborder">پژوهشی</td>

                        <td>تخصیص ترافیک رایگان اینترنت</td>
                    </tr>
                    <tr>
                        <td class="noborder"></td>

                        <td>اولیویت در به کار گیری در مراکز رشد و تاسیس شرکت های دانش بنیان</td>
                    </tr>
                    <tr>
                        <td class="" style="border-bottom:0 !important; "></td>

                        <td>اولیت  اعطای وام در سقف تعیین شده</td>
                    </tr>
                    <tr>
                        <td class="noborder"></td>

                        <td>اولویت در تخصیص  خوابگاه دانشجویی و تخفیف 30 درصدی خوابگاه</td>
                    </tr>
                    <tr>
                        <td class="noborder">رفاهی</td>

                        <td>بلیط رایگاه استخر</td>
                    </tr>
                    <tr>
                        <td class="noborder"></td>

                        <td>شارژ رایگان کارت اتوبوس</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <p>لیست تسهیلات</p>
                <table class="GeneratedTable">
                    <thead>
                    <tr>
                        <th>نوع جایزه</th>
                        <th>تسهیلات  </th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td class="noborder"></td>

                        <td>اعتبار توان مندی  آموزشی و کار آفرینی</td>
                    </tr>
                    <tr>
                        <td class="noborder">جایزه دکتر شکوهی ( آموزش )</td>

                        <td>اعتبار مهارت افزایی</td>
                    </tr>
                    <tr>
                        <td class="noborder"></td>

                        <td>کمک هزینه شرکت درمسابقات مورد تایید گروه</td>
                    </tr>
                    <tr>
                        <td class="" style="border-bottom:0 !important; "></td>
                        <td>اعتبار ارتباطات علمی</td>
                    </tr>
                    <tr>
                        <td class="noborder"></td>

                        <td>اعتبار اجرای پایان نامه کارشناسی</td>
                    </tr>
                    <tr>
                        <td class="noborder">جایزه دکتر  گنجی ( پژوهشی )</td>

                        <td>اعتبار مشارکت در  فعالیت های نوآوری  و کار آموزی</td>
                    </tr>
                    <tr>
                        <td class="noborder"></td>

                        <td>اعتبارشرکت در مجامع  معتبر داخلی</td>
                    </tr>
                    <tr>
                        <td class="" style="border-bottom:0 !important; "></td>

                        <td>راتبه دانشجویی</td>
                    </tr>
                    <tr>
                        <td class="noborder"></td>

                        <td>هدیه ازدواج</td>
                    </tr>
                    <tr>
                        <td class="noborder">جایزه دکتر معتمد نژاد ( فرهنگی )</td>

                        <td>اعتبار  برنامه ها و سفر های زیارتی و گردشگری</td>
                    </tr>
                    <tr>
                        <td class="noborder"></td>

                        <td>کمک هزینه شهریه خوابگاه</td>
                    </tr>
                    </tbody>
                </table>
                <br>


            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        activeMenu(6);
    </script>
@endsection

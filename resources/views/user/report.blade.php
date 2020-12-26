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
                گزارش درخواست ها
                </span>
            <div class="float-left pb-3">
                <a href="{{route('action.create')}}" class="btn btn-outline-primary">
                    ثبت فعالیت جدید
                </a>
            </div>
        </div>
        <div class="table-responsive overflow-hidden">
            <table id="dt-filter-search" class="table text-right table-hover table-striped">
                <thead>
                <tr>
                    <th class="filter">عنوان فعالیت
                    </th>
                    <th class="">تاریخ ثبت
                    </th>
                    <th class="filter">امتیاز
                    </th>
                    <th class="filter">وضعیت
                    </th>
                    <th class="">عملیات
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>
                            {{$d->title}}
                        </td>
                        <td>
                            {{$d->date}}
                        </td>
                        <td>
                            {{$d->points}}
                        </td>
                        <td>
                            @if($d->status==0)
                                <img src="{{asset('image/check.png')}}">
                                در حال بررسی
                            @elseif($d->status==1)
                                <img src="{{asset('image/accecpt.png')}}">
                                تایید شده !
                            @elseif($d->status==2)
                                <img src="{{asset('image/deny.png')}}">
                                رد شده
                            @endif

                        </td>
                        <td>
                            <a href="{{route('action.show',$d->id)}}" data-toggle="tooltip" data-placement="top" title="مشاهده فعالیت">
                                <i class="fa fa-eye"></i>
                            </a>
                            @if($d->status==0)
                                <a href="" class="trashbtn" data-id="{{$d->id}}" data-toggle="tooltip" data-placement="top" title="حذف فعالیت">
                                    <i class="fa fa-trash" style="color: #ec3030"></i>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot class="tfhide" style="border-top:1px dashed black ">
                <tr>
                    <th class="filter">
                        <input id="title" class="form-control" type="text" placeholder="عنوان فعالیت">
                    </th>
                    <th class="">
                        <input id="date" class="form-control" type="text" placeholder="تاریخ ثبت">
                    </th>
                    <th class="filter">
                    </th>
                    <th class="filter">
                        <input id="status" class="form-control" type="text" placeholder="وضعیت">
                    </th>
                    <th class="">
                    </th>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="row p-3 ">
            <div class="d-inline">


            </div>
        </div>
    </div>



@endsection
@section('script')
    <div name="destroy" content="{{ csrf_token() }}"></div>

    <script type="text/javascript" charset="utf8" src="{{asset('plugin/datatables.js')}}"></script>
    <script>
        $(document).ready(function ()
        {
            $('.tfhide').hide();
            var table = $('#dt-filter-search').DataTable({

                initComplete: function () {
                    // Apply the search
                    this.api().columns().every(function () {
                        var that = this;

                        $('input', this.footer()).on('keyup change clear', function () {
                            if (that.search() !== this.value) {
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        });
                    });
                },
                fixedHeader: true,
                language: {
                    "info": " _START_ تا _END_ از _TOTAL_ ",
                    paginate: {
                        next: 'بعدی', // or '→'
                        previous: 'قبلی' // or '←'
                    },
                    "sEmptyTable": "هیچ داده ای در جدول وجود ندارد",
                    "sInfo": "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                    "sInfoEmpty": "نمایش 0 تا 0 از 0 رکورد",
                    "sInfoFiltered": "(فیلتر شده از _MAX_ رکورد)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ",",
                    "sLengthMenu": "نمایش _MENU_ رکورد",
                    "sLoadingRecords": "در حال بارگزاری...",
                    "sProcessing": "در حال پردازش...",
                    "sSearch": "جستجو:",
                    "sZeroRecords": "رکوردی با این مشخصات پیدا نشد",
                    "oPaginate": {
                        "sFirst": "ابتدا",
                        "sLast": "انتها",
                        "sNext": "بعدی",
                        "sPrevious": "قبلی"
                    }, "oExport": {
                        "sPrint": "ابتدا",
                    },
                    "oAria": {
                        "sSortAscending": ": فعال سازی نمایش به صورت صعودی",
                        "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
                    }
                },
                dom: 'Bfrtip',
                buttons: [{
                        text: '<i class="far fa-filter"></i><span> فیلتر </span>',
                        action: function () {
                            $('.tfhide').toggle(1000);
                        }
                    },
                    {
                        extend: 'excel',
                        text: '<i class="fal fa-file-excel"></i><span> خروجی excel</span>',
                    },
                    {
                        extend: 'print',
                        text: '<i class="fal fa-print"></i><span> چاپ</span>',
                        customize: function (win) {
                            $(win.document.body)
                                .css('direction', 'rtl')
                                .prepend(
                                    '<img src="{{ asset('/images/logo.png') }}" style="position:absolute; top:0; right:0;left: 0;margin: 0 auto;display: block;opacity: .05" />'
                                );

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });


        $('.filter-menu').hide();
        $("#toggle-filter").click(function () {
            $(".filter-menu").toggle(1000);
        });
        activeMenu(5);

        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $('#file-lable').text(fileName);

        });
        $('.observer-example').persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD',
        });
    </script>
    <script src="{{asset('plugin/sweetalert.js')}}"></script>
    <script>
        $(document).on('click', '.trashbtn', function (e) {
            let _token = $('div[name="destroy"]').attr('content');
            e.preventDefault();
            var id = $(this).data('id');
            Swal.fire({
                title: 'آیا  اطمینان دارید ؟',
                text: "آیا از حذف این رکورد اطمینان دارید ؟ این دیتا قابل بازیابی نخواهد بود !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: "خیر منصرف شدم!",
                confirmButtonText: 'بله !'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "{{route('action.delete')}}",
                        data: {id: id, _token: _token},
                        success: function (data) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'حذف رکورد از دیتابیس با موفقیت انجام شد !',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 1800);

                        }
                    });
                }
            })
            // function() {
            //
            // });
        });
    </script>
@endsection

{{--<!DOCTYPE html>--}}
{{--<html lang="fa" dir="rtl">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>فاکتور #{{ $order->order_number }} | پنل ادمین</title>--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/master_style.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">--}}
{{--    <style>--}}
{{--        @media print {--}}
{{--            .no-print { display: none; }--}}
{{--            .content-wrapper, .main-header, .main-sidebar, .main-footer {--}}
{{--                display: none !important;--}}
{{--            }--}}
{{--            body { margin: 0; }--}}
{{--            .invoice-box {--}}
{{--                width: 100% !important;--}}
{{--                margin: 0 !important;--}}
{{--                box-shadow: none !important;--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}

{{--<body class="hold-transition skin-info-light fixed sidebar-mini rtl">--}}
{{--<div class="wrapper">--}}
{{--    <header class="main-header">@include('admin.pages.partial.header')</header>--}}
{{--    <aside class="main-sidebar">@include('admin.pages.partial.asside')</aside>--}}

{{--    <div class="content-wrapper">--}}
{{--        <div class="content-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <h1 class="m-0">فاکتور خرید #{{ $order->order_number }}</h1>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <section class="content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="invoice-box bg-white p-4 rounded shadow no-print">--}}
{{--                    <div class="text-center mb-3">--}}
{{--                        <h3>فاکتور خرید</h3>--}}
{{--                        <p class="text-muted">شماره فاکتور: <strong>{{ $order->order_number }}</strong></p>--}}
{{--                    </div>--}}

{{--                    <div class="row mb-4">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <h5>اطلاعات مشتری:</h5>--}}
{{--                            <p>--}}
{{--                                <strong>{{ $order->user->name ?? '---' }}</strong><br>--}}
{{--                                {{ $order->user->email ?? 'ثبت نکرده است' }}<br>--}}
{{--                                {{ $order->shipping_method ?? 'ثبت نکرده است' }}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 text-md-end">--}}
{{--                            <h5>تاریخ سفارش:</h5>--}}
{{--                            <p>{{ \Morilog\Jalali\Jalalian::fromDateTime($order->created_at)->format('j F Y - H:i') }}</p>--}}
{{--                            <h5>وضعیت پرداخت:</h5>--}}
{{--                            <span class="badge bg-{{ $order->payment_status === 'paid' ? 'success' : 'warning' }}">--}}
{{--                                {{ $order->payment_status === 'paid' ? 'پرداخت شده' : 'در انتظار پرداخت' }}--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-bordered">--}}
{{--                            <thead class="table-light">--}}
{{--                            <tr>--}}
{{--                                <th>محصول</th>--}}
{{--                                <th>تعداد</th>--}}
{{--                                <th>قیمت واحد</th>--}}
{{--                                <th>جمع کل</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($order->items as $item)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $item->product->title ?? '---' }}</td>--}}
{{--                                    <td>{{ $item->quantity }}</td>--}}
{{--                                    <td>{{ number_format($item->price) }} تومان</td>--}}
{{--                                    <td>{{ number_format($item->total) }} تومان</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                            <tfoot>--}}
{{--                            <tr>--}}
{{--                                <th colspan="3" class="text-end">جمع کل سفارش:</th>--}}
{{--                                <th>{{ number_format($order->total_amount) }} تومان</th>--}}
{{--                            </tr>--}}
{{--                            </tfoot>--}}
{{--                        </table>--}}
{{--                    </div>--}}

{{--                    <div class="text-center mt-3 no-print">--}}
{{--                        <button onclick="window.print()" class="btn btn-success me-2">چاپ فاکتور</button>--}}
{{--                        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">بازگشت به لیست</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}

{{--    <footer class="main-footer text-center">@include('admin.pages.partial.footer')</footer>--}}
{{--</div>--}}

{{--<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>--}}
{{--<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>--}}
{{--<script src="{{ asset('js/template.js') }}"></script>--}}
{{--<script src="{{ asset('js/demo.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>فاکتور #{{ $order->order_number }} | پنل ادمین</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">
    <style>
        @media print {
            .no-print { display: none; }
            .content-wrapper, .main-header, .main-sidebar, .main-footer {
                display: none !important;
            }
            body { margin: 0; }
            .invoice-box {
                width: 100% !important;
                margin: 0 !important;
                box-shadow: none !important;
            }
        }
    </style>
</head>

<body class="hold-transition skin-info-light fixed sidebar-mini rtl">
<div class="wrapper">
    <header class="main-header">@include('admin.pages.partial.header')</header>
    <aside class="main-sidebar">@include('admin.pages.partial.asside')</aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">فاکتور خرید #{{ $order->order_number }}</h1>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="invoice-box bg-white p-4 rounded shadow no-print">
                    <div class="text-center mb-3">
                        <h3>فاکتور خرید</h3>
                        <p class="text-muted">شماره فاکتور: <strong>{{ $order->order_number }}</strong></p>
                    </div>

                    <div class="row mb-4">
                        <!-- اطلاعات مشتری -->
                        <div class="col-md-6">
                            <h5>مشخصات مشتری:</h5>
                            <p>
                                <strong>{{ $order->first_name ?? '' }} {{ $order->last_name ?? '' }}</strong><br>
                                ایمیل: {{ $order->email ?? 'کاربر ایمیل ندارد' }}<br>
                                تلفن: {{ $order->phone ?? '---' }}<br>
                                کد پستی: {{ $order->postal_code ?? '---' }}<br>
                                آدرس: {{ $order->address_1 ?? '---' }}
                                @if($order->address_2)
                                    <br> {{ $order->address_2 }}
                                @endif
                            </p>
                        </div>

                        <!-- جزئیات سفارش -->
                        <div class="col-md-6 text-md-end">
                            <h5>جزئیات سفارش:</h5>
                            <p>
                                تاریخ: {{ \Morilog\Jalali\Jalalian::fromDateTime($order->created_at)->format('j F Y') }}<br>
                                ساعت: {{ $order->created_at->format('H:i') }}<br>
                                روش ارسال: {{ $order->shipping_method ?? '---' }}<br>
                                وضعیت:
                                <span class="badge bg-{{ $order->status === 'completed' ? 'success' : ($order->status === 'pending' ? 'warning' : 'secondary') }}">
                                    {{ $order->status ?? '---' }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <!-- جدول آیتم‌ها -->
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered">
                            <thead class="table-light">
                            <tr>
                                <th>محصول</th>
                                <th>تعداد</th>
                                <th>قیمت واحد</th>
                                <th>جمع کل</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->items as $item)
                                <tr>
                                    <td>{{ $item->product->name ?? $item->product->title ?? '---' }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ number_format($item->price) }} تومان</td>
                                    <td>{{ number_format($item->total ?? ($item->price * $item->quantity)) }} تومان</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- خلاصه مالی -->
                    <div class="row mb-4">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <table class="table table-borderless table-sm">
                                <tr>
                                    <td class="text-end">جمع کالاها:</td>
                                    <td>{{ number_format($order->subtotal) }} تومان</td>
                                </tr>
                                <tr>
                                    <td class="text-end">هزینه ارسال:</td>
                                    <td>{{ number_format($order->shipping_cost ?? 0) }} تومان</td>
                                </tr>
                                <tr>
                                    <td class="text-end">مالیات:</td>
                                    <td>{{ number_format($order->tax ?? 0) }} تومان</td>
                                </tr>
                                <tr class="border-top">
                                    <th class="text-end">مبلغ کل:</th>
                                    <th>{{ number_format($order->total) }} تومان</th>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- یادداشت -->
                    @if($order->notes)
                        <div class="mb-4 p-3 bg-light rounded">
                            <h6>یادداشت:</h6>
                            <p class="mb-0">{{ $order->notes }}</p>
                        </div>
                    @endif

                    <!-- دکمه‌ها -->
                    <div class="text-center mt-3 no-print">
                        <button onclick="window.print()" class="btn btn-success me-2">چاپ فاکتور</button>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">بازگشت به لیست</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="main-footer text-center">@include('admin.pages.partial.footer')</footer>
</div>

<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
</body>
</html>

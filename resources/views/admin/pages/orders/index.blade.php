<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>لیست سفارشات | پنل ادمین</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">
</head>

<body class="hold-transition skin-info-light fixed sidebar-mini rtl">
<div class="wrapper">
    <header class="main-header">@include('admin.pages.partial.header')</header>
    <aside class="main-sidebar">@include('admin.pages.partial.asside')</aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">لیست سفارشات</h1>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">همه سفارشات</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead>
                                <tr class="text-center">
                                    <th>شماره سفارش</th>
                                    <th>خریدار</th>
                                    <th>مبلغ کل</th>
                                    <th>پرداخت</th>
                                    <th>تاریخ</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($orders as $order)
                                    <tr class="text-center">
                                        <td>{{ $order->order_number }}</td>
                                        <td>{{ $order->user->name ?? '---' }}</td>
                                        <td>{{ number_format($order->total) }} تومان</td>
                                        <td>
                                                <span class="badge bg-{{ $order->payment_status === 'paid' ? 'success' : 'warning' }}">
                                                    {{ $order->payment_status === 'paid' ? 'پرداخت شده' : 'در انتظار' }}
                                                </span>
                                        </td>
                                        <td>{{ $order->created_at->format('Y/m/d') }}</td>
                                        <td>
                                            <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-info">فاکتور</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">سفارشی وجود ندارد</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
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

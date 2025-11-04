<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مدیریت سایزها | پنل ادمین</title>

    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">
    <style>
        .table td, .table th {
            vertical-align: middle !important;
        }
        .card {
            border-radius: 10px;
            overflow: hidden;
        }
        .btn {
            border-radius: 8px;
        }
        .main-footer {
            padding: 20px 0;
        }
    </style>
</head>
<body class="hold-transition skin-info-light fixed sidebar-mini rtl">
<div class="wrapper">

    <!-- header -->
    <header class="main-header">
        @include('admin.pages.partial.header')
    </header>

    <!-- sidebar -->
    <aside class="main-sidebar">
        @include('admin.pages.partial.asside')
    </aside>

    <div class="content-wrapper p-4">
        <section class="content">

            <h2 class="mb-4 text-center">مدیریت سایزها</h2>

            {{-- پیام موفقیت یا خطا --}}
            @if(session('success'))
                <div class="alert alert-success text-center">{{ session('success') }}</div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- فرم افزودن سایز --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white fw-bold">افزودن سایز جدید</div>
                <div class="card-body">
                    <form action="{{ route('admin.sizes.store') }}" method="POST" class="row g-3 align-items-center">
                        @csrf
                        <div class="col-md-3">
                            <label class="form-label">نام سایز</label>
                            <input type="text" name="name" class="form-control" placeholder="مثلاً XL" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">توضیحات</label>
                            <input type="text" name="description" class="form-control" placeholder="توضیحات (اختیاری)">
                        </div>
                        <div class="col-md-2 text-center">
                            <label class="form-label d-block">وضعیت</label>
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" checked>
                            <label class="form-check-label" for="is_active">فعال</label>
                        </div>
                        <div class="col-md-1 text-center mt-3">
                            <button type="submit" class="btn btn-success w-100">+</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- جدول سایزها --}}
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white fw-bold">لیست سایزها</div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover mb-0 text-center">
                        <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>نام سایز</th>
                            <th>توضیحات</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($sizes as $size)
                            <tr>
                                <td>{{ $size->id }}</td>
                                <td>
                                    <form action="{{ route('admin.sizes.update', $size->id) }}" method="POST" class="d-flex justify-content-center align-items-center gap-2">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="name" value="{{ $size->name }}" class="form-control text-center" style="max-width: 120px;" required>
                                </td>
                                <td>
                                    <input type="text" name="description" value="{{ $size->description }}" class="form-control text-center" style="max-width: 200px;">
                                </td>
                                <td>
                                    <input type="checkbox" name="is_active" {{ $size->is_active ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm">ویرایش</button>
                                    </form>
                                    <form action="{{ route('admin.sizes.destroy', $size->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('حذف شود؟')">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="text-center text-muted">هیچ سایزی ثبت نشده است.</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</div>

<footer class="main-footer text-center mt-5">
    @include('admin.pages.partial.footer')
</footer>

<!-- Scripts -->
<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
</body>
</html>

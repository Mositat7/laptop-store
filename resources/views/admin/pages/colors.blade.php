<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مدیریت رنگ‌ها | Superieur Admin</title>

    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Bootstrap extend -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/master_style.css') }}">
    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">
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

    <!-- محتوا -->
    <div class="content-wrapper">
        <div class="container-full">

            <!-- عنوان صفحه -->
            <section class="content-header">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="page-title">مدیریت رنگ‌ها</h4>
                </div>
            </section>

            <!-- محتوای اصلی -->
            <section class="content">

                {{-- فرم افزودن / ویرایش --}}
                <div class="card mb-4">
                    <div class="card-body">
                        <h5>{{ isset($editColor) ? 'ویرایش رنگ' : 'افزودن رنگ جدید' }}</h5>

                        <form action="{{ isset($editColor) ? route('admin.colors.update', $editColor->id) : route('admin.colors.store') }}" method="POST">
                            @csrf
                            @if(isset($editColor))
                                @method('PUT')
                            @endif

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>نام رنگ</label>
                                    <input type="text" name="name" class="form-control"
                                           value="{{ $editColor->name ?? old('name') }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>کد رنگ</label>
                                    <input type="color" name="code" class="form-control form-control-color"
                                           value="{{ $editColor->code ?? old('code', '#000000') }}" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-{{ isset($editColor) ? 'primary' : 'success' }}">
                                {{ isset($editColor) ? 'ذخیره تغییرات' : 'افزودن رنگ' }}
                            </button>

                            @if(isset($editColor))
                                <a href="{{ route('admin.colors.index') }}" class="btn btn-secondary">انصراف</a>
                            @endif
                        </form>
                    </div>
                </div>

                {{-- لیست رنگ‌ها --}}
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">لیست رنگ‌ها</h5>

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>شناسه</th>
                                <th>نام رنگ</th>
                                <th>پیش‌نمایش</th>
                                <th>کد رنگ</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($colors as $color)
                                <tr>
                                    <td>{{ $color->id }}</td>
                                    <td>{{ $color->name }}</td>
                                    <td>
                                        <div style="width:40px; height:20px; background:{{ $color->code }}; border:1px solid #ccc;"></div>
                                    </td>
                                    <td>{{ $color->code }}</td>
                                    <td>
                                        <a href="{{ route('admin.colors.edit', $color->id) }}" class="btn btn-warning btn-sm">ویرایش</a>
                                        <form action="{{ route('admin.colors.destroy', $color->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('آیا از حذف مطمئن هستید؟')">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">هیچ رنگی ثبت نشده است.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>

            </section>
        </div>
    </div>

    <!-- footer -->
    <footer class="main-footer">
        @include('admin.pages.partial.footer')
    </footer>

    <div class="control-sidebar-bg"></div>
</div>

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

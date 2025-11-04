<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مدیریت برندها | پنل ادمین</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">
</head>

<body class="hold-transition skin-info-light fixed sidebar-mini rtl">
<div class="wrapper">

    <header class="main-header">
        @include('admin.pages.partial.header')
    </header>

    <aside class="main-sidebar">
        @include('admin.pages.partial.asside')
    </aside>

    <div class="content-wrapper p-4">
        <div class="container-fluid">
            <h2 class="text-center mb-4">مدیریت برندها</h2>

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

            {{-- فرم ویرایش (اگر در حالت ویرایش باشیم) --}}
            @if($editingBrand)
                <div class="card mb-4 shadow border-warning">
                    <div class="card-header bg-warning text-dark">
                        ویرایش برند: <strong>{{ $editingBrand->name }}</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.brands.update', $editingBrand->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 align-items-center">
                            @csrf
                            @method('PUT')
                            <div class="col-md-4">
                                <label class="form-label">نام برند</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $editingBrand->name) }}" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">لوگو جدید (اختیاری)</label>
                                <input type="file" name="logo" class="form-control" accept="image/*">
                                @if($editingBrand->logo)
                                    <div class="mt-2">
                                        <img src="{{ asset('assets/image/' . $editingBrand->logo) }}" alt="{{ $editingBrand->name }}" width="60" height="60">
                                        <small class="d-block text-muted">لوگوی فعلی</small>
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-2 text-center">
                                <label class="form-label d-block">وضعیت</label>
                                <input class="form-check-input" type="checkbox" name="is_active" id="is_active_edit" value="1" {{ $editingBrand->is_active ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active_edit">فعال</label>
                            </div>

                            <div class="col-md-2 mt-4 d-flex gap-2">
                                <button type="submit" class="btn btn-primary w-100">به‌روزرسانی</button>
                                <a href="{{ route('admin.brands.index') }}" class="btn btn-secondary w-100">لغو</a>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            {{-- فرم افزودن برند جدید --}}
            <div class="card mb-4 shadow">
                <div class="card-header bg-primary text-white">افزودن برند جدید</div>
                <div class="card-body">
                    <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data" class="row g-3 align-items-center">
                        @csrf
                        <div class="col-md-4">
                            <label class="form-label">نام برند</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">لوگو</label>
                            <input type="file" name="logo" class="form-control" accept="image/*" required>
                        </div>

                        <div class="col-md-2 text-center">
                            <label class="form-label d-block">وضعیت</label>
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" checked>
                            <label class="form-check-label" for="is_active">فعال</label>
                        </div>

                        <div class="col-md-2 mt-4">
                            <button type="submit" class="btn btn-success w-100">افزودن برند</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- جدول لیست برندها --}}
            <div class="card shadow">
                <div class="card-header bg-info text-white">لیست برندها</div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover mb-0 text-center align-middle">
                        <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>لوگو</th>
                            <th>نام برند</th>
                            <th>وضعیت</th>
                            <th>ترتیب</th>
                            <th>وب‌سایت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>
                                    @if($brand->logo)
                                        <img src="{{ asset('assets/image/' . $brand->logo) }}" alt="{{ $brand->name }}" width="60" height="60">
                                    @else
                                        <span class="text-muted">ندارد</span>
                                    @endif
                                </td>
                                <td>{{ $brand->name }}</td>
                                <td>{!! $brand->is_active ? '<span class="badge bg-success">فعال</span>' : '<span class="badge bg-danger">غیرفعال</span>' !!}</td>
                                <td>{{ $brand->order }}</td>
                                <td>
                                    @if($brand->website)
                                        <a href="{{ $brand->website }}" target="_blank">{{ parse_url($brand->website, PHP_URL_HOST) ?? $brand->website }}</a>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.brands.index', ['edit_id' => $brand->id]) }}" class="btn btn-warning btn-sm">ویرایش</a>
                                    <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('آیا از حذف این برند مطمئن هستید؟')">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">هیچ برندی ثبت نشده است.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <footer class="main-footer text-center mt-5">
        @include('admin.pages.partial.footer')
    </footer>
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

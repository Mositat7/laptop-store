<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مدیریت دسته‌بندی‌ها | پنل ادمین</title>

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
            <h2 class="text-center mb-4">مدیریت دسته‌بندی‌ها</h2>

            {{-- پیام‌های موفقیت یا خطا --}}
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
            @if($editingCategory)
                <div class="card mb-4 shadow border-warning">
                    <div class="card-header bg-warning text-dark">
                        ویرایش دسته‌بندی: <strong>{{ $editingCategory->name }}</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.categories.update', $editingCategory->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 align-items-center">
                            @csrf
                            @method('PUT')
                            <div class="col-md-5">
                                <label class="form-label">نام دسته</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $editingCategory->name) }}" required>
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">عکس جدید (اختیاری)</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                @if($editingCategory->image)
                                    <div class="mt-2">
                                        <img src="{{ asset($editingCategory->image) }}" width="50" height="50" class="rounded-circle">
                                        <small class="d-block text-muted">تصویر فعلی</small>
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-2 mt-4 d-flex gap-2">
                                <button type="submit" class="btn btn-primary w-100">به‌روزرسانی</button>
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary w-100">لغو</a>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            {{-- فرم افزودن دسته جدید --}}
            <div class="card mb-4 shadow">
                <div class="card-header bg-primary text-white">افزودن دسته‌بندی جدید</div>
                <div class="card-body">
                    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" class="row g-3 align-items-center">
                        @csrf
                        <div class="col-md-5">
                            <label class="form-label">نام دسته</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="col-md-5">
                            <label class="form-label">عکس</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>

                        <div class="col-md-2 mt-4">
                            <button type="submit" class="btn btn-success w-100">افزودن</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- جدول لیست دسته‌ها --}}
            <div class="card shadow">
                <div class="card-header bg-info text-white">لیست دسته‌بندی‌ها</div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover mb-0 text-center align-middle">
                        <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>تصویر</th>
                            <th>نام دسته</th>
                            <th>اسلاگ</th>
                            <th>تاریخ ایجاد</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>
                                    @if($category->image)
                                        <img src="{{ asset($category->image) }}" width="50" height="50" class="rounded-circle">
                                    @else
                                        <span class="text-muted">ندارد</span>
                                    @endif
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ jdate($category->created_at)->format('Y/m/d') }}</td>
                                <td>
                                    <a href="{{ route('admin.categories.index', ['edit_id' => $category->id]) }}" class="btn btn-warning btn-sm">ویرایش</a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('آیا از حذف این دسته مطمئن هستید؟')">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">هیچ دسته‌ای ثبت نشده است.</td>
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

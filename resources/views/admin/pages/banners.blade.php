<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مدیریت بنرها | پنل ادمین</title>

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
            <h2 class="text-center mb-4">مدیریت بنرها</h2>

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
            @if($editingBanner)
                <div class="card mb-4 shadow border-warning">
                    <div class="card-header bg-warning text-dark">
                        ویرایش بنر: <strong>{{ $editingBanner->title ?: 'بدون عنوان' }}</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.banners.update', $editingBanner->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 align-items-center">
                            @csrf
                            @method('PUT')

                            <div class="col-md-3">
                                <label class="form-label">عنوان (اختیاری)</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $editingBanner->title) }}">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">لینک (URL)</label>
                                <input type="url" name="url" class="form-control" value="{{ old('url', $editingBanner->url) }}" placeholder="https://example.com">
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">موقعیت (ترتیب)</label>
                                <input type="number" name="position" class="form-control" value="{{ old('position', $editingBanner->position) }}">
                            </div>

                            <div class="col-md-2 text-center">
                                <label class="form-label d-block">وضعیت</label>
                                <input class="form-check-input" type="checkbox" name="is_active" id="is_active_edit" value="1" {{ $editingBanner->is_active ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active_edit">فعال</label>
                            </div>

                            <div class="col-md-2 mt-4 d-flex gap-2">
                                <button type="submit" class="btn btn-primary w-100">به‌روزرسانی</button>
                                <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary w-100">لغو</a>
                            </div>

                            <div class="col-12 mt-3">
                                <label class="form-label">تصویر جدید (اختیاری)</label>
                                <input type="file" name="image_path" class="form-control" accept="image/*">
                                @if($editingBanner->image_path)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $editingBanner->image_path) }}" alt="بنر" width="100" height="50" class="border">
                                        <small class="d-block text-muted">تصویر فعلی</small>
                                    </div>
                                    @endif
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            {{-- فرم افزودن بنر جدید --}}
            <div class="card mb-4 shadow">
                <div class="card-header bg-primary text-white">افزودن بنر جدید</div>
                <div class="card-body">
                    <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data" class="row g-3 align-items-center">
                        @csrf

                        <div class="col-md-3">
                            <label class="form-label">عنوان (اختیاری)</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">لینک (URL)</label>
                            <input type="url" name="url" class="form-control" placeholder="https://example.com">
                        </div>

                        <div class="col-md-2">
                            <label class="form-label">موقعیت (ترتیب)</label>
                            <input type="number" name="position" class="form-control" value="0">
                        </div>

                        <div class="col-md-2 text-center">
                            <label class="form-label d-block">وضعیت</label>
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" checked>
                            <label class="form-check-label" for="is_active">فعال</label>
                        </div>

                        <div class="col-md-2 mt-4">
                            <button type="submit" class="btn btn-success w-100">افزودن بنر</button>
                        </div>

                        <div class="col-12 mt-3">
                            <label class="form-label">تصویر بنر <span class="text-danger">*</span></label>
                            <input type="file" name="image_path" class="form-control" accept="image/*" required>
                        </div>
                    </form>
                </div>
            </div>

            {{-- جدول لیست بنرها --}}
            <div class="card shadow">
                <div class="card-header bg-info text-white">لیست بنرها</div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover mb-0 text-center align-middle">
                        <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>تصویر</th>
                            <th>عنوان</th>
                            <th>لینک</th>
                            <th>موقعیت</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($banners as $banner)
                            <tr>
                                <td>{{ $banner->id }}</td>
                                <td>
                                    @if($banner->image_path)
                                        <img src="{{ asset($banner->image_path) }}" width="100" height="50" class="border">
                                    @else
                                        <span class="text-muted">ندارد</span>
                                    @endif
                                </td>
                                <td>{{ $banner->title ?: '—' }}</td>
                                <td>
                                    @if($banner->url)
                                        <a href="{{ $banner->url }}" target="_blank">{{ parse_url($banner->url, PHP_URL_HOST) ?: $banner->url }}</a>
                                    @else
                                        <span class="text-muted">—</span>
                                    @endif
                                </td>
                                <td>{{ $banner->position }}</td>
                                <td>
                                    {!! $banner->is_active ? '<span class="badge bg-success">فعال</span>' : '<span class="badge bg-danger">غیرفعال</span>' !!}
                                </td>
                                <td>
                                    <a href="{{ route('admin.banners.index', ['edit_id' => $banner->id]) }}" class="btn btn-warning btn-sm">ویرایش</a>
                                    <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('آیا از حذف این بنر مطمئن هستید؟')">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">هیچ بنری ثبت نشده است.</td>
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

<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
</body>
</html>

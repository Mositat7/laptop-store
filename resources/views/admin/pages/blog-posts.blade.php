<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مدیریت بلاگ | پنل ادمین</title>
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
                <h1 class="m-0">مدیریت مقالات</h1>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                @if(session('post_success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('post_success') }}
                    </div>
                @endif

                <div class="card mb-4 shadow">
                    <div class="card-header bg-primary text-white">
                        {{ isset($editingPost) ? 'ویرایش مقاله' : 'افزودن مقاله جدید' }}
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>خطا در ارسال فرم:</strong>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ isset($editingPost) ? route('admin.blog-posts.update', $editingPost->id) : route('admin.blog-posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($editingPost))
                                @method('PUT')
                            @endif

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">عنوان مقاله *</label>
                                        <input type="text" name="title" class="form-control" value="{{ old('title', $editingPost->title ?? '') }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">دسته‌بندی *</label>
                                        <select name="blog_category_id" class="form-control" required>
                                            <option value="">انتخاب کنید...</option>
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat->id }}" {{ (isset($editingPost) && $editingPost->blog_category_id == $cat->id) || old('blog_category_id') == $cat->id ? 'selected' : '' }}>
                                                    {{ $cat->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">تصویر مقاله</label>
                                        <input type="file" name="image" class="form-control" accept="image/*">
                                        @if(isset($editingPost) && $editingPost->image)
                                            <div class="mt-2">
                                                <img src="{{ asset($editingPost->image) }}" class="img-thumbnail" width="100">
                                                <small class="d-block text-muted">تصویر فعلی</small>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">محتوای مقاله *</label>
                                        <textarea name="content" class="form-control" rows="6" required>{{ old('content', $editingPost->content ?? '') }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check mt-2">
                                        <input type="hidden" name="is_published" value="0">
                                        <input class="form-check-input" type="checkbox" name="is_published" value="1" {{ (isset($editingPost) && $editingPost->is_published) || old('is_published') ? 'checked' : '' }}>
                                        <label class="form-check-label">منتشر شود</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check mt-2">
                                        <input type="hidden" name="is_featured" value="0">
                                        <input class="form-check-input" type="checkbox" name="is_featured" value="1" {{ (isset($editingPost) && $editingPost->is_featured) || old('is_featured') ? 'checked' : '' }}>
                                        <label class="form-check-label">ویژه شود</label>
                                    </div>
                                </div>

                                <div class="col-12 text-left mt-3">
                                    <button type="submit" class="btn btn-success px-4">
                                        {{ isset($editingPost) ? 'بروزرسانی مقاله' : 'افزودن مقاله' }}
                                    </button>
                                    @if(isset($editingPost))
                                        <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-secondary">انصراف</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- جدول مقالات (همانند قبل) -->
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">لیست مقالات</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="text-center">
                                <th>عکس</th><th>عنوان</th><th>دسته</th><th>نویسنده</th><th>تاریخ</th><th>وضعیت</th><th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($posts as $post)
                                <tr class="text-center">
                                    <td>
                                        @if($post->image)
                                            <img src="{{ asset($post->image) }}" width="50" class="rounded">
                                        @else
                                            <span class="text-muted">ندارد</span>
                                        @endif
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name ?? '---' }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>{{ $post->publish_date ? \Morilog\Jalali\Jalalian::fromDateTime($post->publish_date)->format('Y/m/d') : '---' }}</td>
                                    <td>
                                            <span class="badge bg-{{ $post->is_published ? 'success' : 'secondary' }}">
                                                {{ $post->is_published ? 'منتشر' : 'پیش‌نویس' }}
                                            </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.blog-posts.index', ['edit_id' => $post->id]) }}" class="btn btn-sm btn-primary">ویرایش</a>
                                        <form action="{{ route('admin.blog-posts.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('حذف شود؟')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="7" class="text-center text-muted">مقاله‌ای وجود ندارد</td></tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="main-footer text-center">@include('admin.pages.partial.footer')</footer>
</div>
{{--<!-- Scripts -->--}}
<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
</body>
</html>

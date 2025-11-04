<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <title>Superieur Admin - Dashboard  Blank Page </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{asset('css/bootstrap-extend.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/master_style.css')}}">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="{{asset('css/skins/_all-skins.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition skin-info-light fixed sidebar-mini rtl">
<div class="container">
    <h2>Categories</h2>

    <!-- فرم افزودن دسته‌بندی جدید -->
    <form action="{{ route('admin.categories.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="input-group">
            <input type="text" name="name" class="form-control" placeholder="Category Name" required>
            <button class="btn btn-primary">Add Category</button>
        </div>
    </form>

    <!-- لیست دسته‌بندی‌ها -->
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->name }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', $cat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.categories.destroy', $cat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        @include('admin.pages.partial.footer')
    </footer>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="{{asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>

<!-- popper -->
<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- SlimScroll -->
<script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>
<!-- Superieur Admin App -->
<script src="{{asset('js/template.js')}}"></script>
<!-- Superieur Admin for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
</body>
</html>


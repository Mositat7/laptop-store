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
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
@include('admin.pages.partial.header')
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  @include('admin.pages.partial.asside')
  </aside>


  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Edit Product</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Product Information</h4>
                        </div>
                        <div class="box-body">
                            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="form-element">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-info">Title</label>
                                                <input type="text" class="form-control" name="title" value="{{ $product->title }}" placeholder="Product title">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-info">Slug</label>
                                                <input type="text" class="form-control" name="slug" value="{{ $product->slug }}" placeholder="product-slug">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="text-info">Short Description</label>
                                                <textarea name="short_description" class="form-control" rows="3">{{ $product->short_description }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-info">Brand</label>
                                                <select class="form-control" name="brand_id">
                                                    @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                                            {{ $brand->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-info">CPU</label>
                                                <input type="text" class="form-control" name="cpu" value="{{ $product->cpu }}" placeholder="CPU model">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-info">GPU</label>
                                                <input type="text" class="form-control" name="gpu" value="{{ $product->gpu }}" placeholder="GPU model">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>RAM</label>
                                                <input type="text" class="form-control" name="ram" value="{{ old('ram', $product->ram) }}" placeholder="8 GB">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Storage</label>
                                                <input type="text" class="form-control" name="storage" value="{{ old('storage', $product->storage) }}" placeholder="512 GB SSD">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Display</label>
                                                <input type="text" class="form-control" name="display" value="{{ old('display', $product->display) }}" placeholder="15.6 inch">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Battery</label>
                                                <input type="text" class="form-control" name="battery" value="{{ old('battery', $product->battery) }}" placeholder="60 Wh">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" class="form-control" name="quantity" value="{{ old('quantity', $product->quantity) }}" placeholder="10">
                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Stock</label>
                                                <input type="number" class="form-control" name="stock" value="{{ old('stock', $product->stock) }}" placeholder="In Stock">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" class="form-control" name="price" value="{{ old('price', $product->price) }}" placeholder="2000">
                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Discount Price</label>
                                                <input type="text" class="form-control" name="discount_price" value="{{ old('discount_price', $product->discount_price) }}" placeholder="1800">
                                            </div>
                                        </div>
                                    </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="is_active">
                                                <option value="1" {{ $product->is_active ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ !$product->is_active ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Featured</label>
                                            <select class="form-control" name="is_featured">
                                                <option value="1" {{ $product->is_featured ? 'selected' : '' }}>Yes</option>
                                                <option value="0" {{ !$product->is_featured ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                    </div>

                    <!-- رنگ‌ها -->
                    <div class="form-group mt-3">
                        <label>Available Colors:</label><br>
                        @foreach($colors as $color)
                            <label class="me-3">
                                <input type="checkbox" name="colors[]" value="{{ $color->id }}"
                                    {{ $product->colors->contains($color->id) ? 'checked' : '' }}>
                                {{ $color->name }}
                            </label>
                        @endforeach
                    </div>

                    <!-- سایزها -->
                    <div class="form-group mt-3">
                        <label>Available Sizes:</label><br>
                        @foreach($sizes as $size)
                            <label class="me-3">
                                <input type="checkbox" name="sizes[]" value="{{ $size->id }}"
                                    {{ $product->sizes->contains($size->id) ? 'checked' : '' }}>
                                {{ $size->name }}
                            </label>
                        @endforeach
                    </div>

                    <style>
                                        input[type=checkbox] {
                                            display: inline-block !important;
                                            opacity: 1 !important;
                                            position: static !important;
                                            width: auto !important;
                                            height: auto !important;
                                            margin-right: 4px;
                                        }
                                    </style>


                                    <!-- توضیحات -->
                                <div class="form-group">
                                    <label class="text-info">Description</label>
                                    <textarea name="description" class="form-control" rows="5">{{ old('description', $product->description) }}</textarea>
                                </div>


                                <div class="form-group">
                                    <label>Meta Keywords</label>
                                    <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $product->meta_keywords) }}">
                                </div>

                                    <!-- تصاویر -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="box-title mt-20">Main Image</h4>
                                        <div class="product-img text-left">
                                            <img src="{{ asset(is_array($product->main_image) ? ($product->main_image[0] ?? 'assets/images/product-placeholder.png') : ($product->main_image ?? 'assets/images/product-placeholder.png')) }}" alt="" width="150">
                                            <div class="fileupload btn btn-outline btn-success mt-2">
                                                <span><i class="ion-upload mr-5"></i>Upload New Image</span>
                                                <input type="file" class="upload" name="main_image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h4 class="box-title mt-20">Gallery</h4>
                                        <div class="fileupload btn btn-outline btn-info">
                                            <span><i class="ion-images mr-5"></i>Upload Gallery Images</span>
                                            <input type="file" class="upload" name="gallery[]" multiple>
                                        </div>
                                        @php
                                            $gallery = $product->gallery;

                                            if (is_string($gallery)) {
                                                $gallery = json_decode($gallery, true) ?: [];
                                            }

                                            // اگر هنوز هم چندبعدی است، یک بعدی می‌کنیم
                                            $gallery = array_map(function($item) {
                                                return is_array($item) ? reset($item) : $item;
                                            }, $gallery);
                                        @endphp

                                        @if(!empty($gallery))
                                            <div class="row mt-3">
                                                @foreach($gallery as $image)
                                                    <div class="col-md-3 mb-3">
                                                        <img src="{{ asset($image) }}" alt="Gallery Image" class="img-thumbnail" width="120">
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif


                                    </div>
                                </div>

                                    <div class="form-actions mt-30">
                                        <button type="submit" class="btn btn-outline btn-success"><i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-outline btn-danger">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
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

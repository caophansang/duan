<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Đăng ký sản phẩm</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link rel="stylesheet" href="/css/pc/create-product.css">
	<style>
		.container {
			margin-top:2%;
		}
	</style>
	@toastr_css
</head>
<body>
	@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-md-2"> <img src="/upload_icon.png" width="80" /></div>
			<div class="col-md-8"><h2>Đăng ký sản phẩm</h2></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form action="/multiuploads" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="Product Name">Loại sản phẩm / Dịch vụ <span class="required">(*)</span></label>
						<select class="form-control" id="type" name="type">
							 <option value="1">Sản phẩm</option>
							  <option value="2">Dịch vụ</option>
						</select>

						<label for="Product Name">Loại sản phẩm <span class="required">(*)</span></label>
						<select class="form-control" id="category" name="category">
						<?php $categories = $data['categories']; ?>
						@foreach ($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="Product Name">Tên sản phẩm <span class="required">(*)</span></label>
						<input type="text" name="name" class="form-control"  placeholder="Product Name" >
					</div>
					<div class="form-group">
						<label for="Product Name">Thêm mô tả về sản phẩm</label>
						<textarea name="description" rows="6" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="Product Name">Giá sản phẩm <span class="required">(*)</span></label>
						<input type="number" name="price" class="form-control"  placeholder="Product Price" >
					</div>
					<div class="form-group">
						<label for="Product Name">Đơn vị sản phẩm <span class="required">(*)</span></label>
						<select class="form-control" id="quantity-type" name="quantity_type">
						<?php $quantityTypes = $data['quantityTypes']; ?>
						@foreach ($quantityTypes as $type)
							<option value="{{ $type->id }}">{{ $type->name }}</option>
						@endforeach
						</select>
					</div>
					<label for="Product Name">Hỉnh ảnh của sản phẩm (Có thể tải nhiều ảnh) <span class="required">(*)</span>:</label>
					<br>
					<input type="file" class="form-control" name="photos[]" multiple />
					<br>
					<label class="switch-label">Còn hàng <span class="required">(*)</span></label>
					<label class="switch">
						<input type="checkbox" name="available" checked>
						<span class="slider round"></span>
					</label>
					<br><br>
					<input type="submit" class="btn btn-primary" value="Upload" />
				</form>
			</div>
		</div>
	</div>
	@jquery
  	@toastr_js
  	@toastr_render
</body>
</html>
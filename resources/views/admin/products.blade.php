@extends('admin/admin')
<style type="text/css">
  @media only screen and (max-width: 900px) {
    .main-header{
      position: fixed !important;
      width: 100% !important;
      top: 0 !important;
      left: 0 !important;
    }
    .content-wrapper{
      padding-top: 65px !important;
    }
    .mobile_hiden {
      display: none;
    }

    .mobile_img {
      width: 40px !important;
      height: 40px !important;
    }

    .mobile_title {
      font-size: 16px !important;
    }

    .mobile_button {
      font-size: 14px !important;
      width: 150px !important;
    }

    .mobile_th {
      padding: 3px !important;
      font-size: 14px !important;
      text-align: center !important;
      width: 50px !important;
    }

    .content-header{
      padding: 6px .5rem !important;
    }
    .table-responsive {
      overflow-x: auto !important;
    }

    .table-responsive table {
      width: 100% !important;
      min-width: 350px !important;
      /* Adjust this value based on your content */
    }

    .modal-header {
      padding: 5px 10px !important;
    }

    .modal-body {
      padding: 5px 10px !important;
    }

    .form-group>img {
      width: 50px !important;
    }
  }
</style>

@section('content_header')
<h2 class="mobile_title">Product Management</h2>
@stop

@section('content')
<div class="row">
  <div class="col-sm-12">
    <button type="button" style="width:200px; margin-bottom: 10px;" class="btn btn-block btn-primary mobile_button" data-toggle="modal" data-target="#create-product">
      <i class="fas fa-plus"></i> Thêm sảm phẩm </button>
      <div class="table-responsive">
    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
      <thead>
        <tr role="row">
          <th class="sorting_asc mobile_th " tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Tên sản phẩm </th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 70px;">Giá</th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Mô tả</th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Ảnh</th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">Cách đếm</th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">Người bán</th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">Trạng thái</th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">Sửa</th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">Xóa</th>
        </tr>
      </thead>

      <tbody>
        @foreach($products as $product)
        <tr role="row" class="odd" style="text-align:center;">
          <td class="mobile_th" style="vertical-align: inherit">{{ $product->name }}</td>
          <td class="mobile_th" style="vertical-align: inherit">{{ $product->price }}</td>
          <td class="mobile_th" style="vertical-align: inherit">{{ substr($product->description,0,100).'...' }}</td>
          <td class="mobile_th"><img class="mobile_img" style="height: 100px; width:100px;" src="{{ $product->productImage->first()->file_name }}"></td>
          <td class="mobile_th" style="vertical-align: inherit">{{ $product->quantityType ? $product->quantityType->name : "null" }}</td>
          <td class="mobile_th" style="vertical-align: inherit">{{ $product->user->name }}</td>
          <td class="mobile_th" style="vertical-align: inherit">
            @if ($product->status == $showStatus)
            <span class="badge badge-success">Đã duyệt</span>
            @elseif ($product->status == $pendingStatus)
            <span class="badge badge-warning">Chờ duyệt</span>
            @else
            <span class="badge badge-danger">Không duyệt</span>
            @endif

            @if ($currentUser->role == $roleSuperAdmin)
            <a href="#" data-toggle="modal" data-target="#update-status-{{ $product->id }}"><i class="fas fa-edit"></i></a>
            @endif
          </td>
          <td class="mobile_th" style="vertical-align: inherit"><a href="#" data-toggle="modal" data-target="#modal-{{ $product->id }}"><i class="fas fa-edit"></i></a></td>
          <td class="mobile_th" style="vertical-align: inherit"><a href="/delete_product/{{ $product->id }}"><i class="fas fa-trash"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    {{ $products->links() }}


    {{-- The create user modal --}}
    <div class="modal fade" id="create-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/multiuploads" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="hidden" name="type" value="1">
                @if ($currentUser->role == $roleSuperAdmin)
                <label for="Product Name">Chọn người bán <span class="required">(*)</span></label>
                <select class="form-control" id="category" name="user_id">
                  @foreach ($users as $user)
                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>
                @endif
                <label for="Product Name">Loại sản phẩm <span class="required">(*)</span></label>
                <select class="form-control" id="category" name="category">
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="Product Name">Tên sản phẩm <span class="required">(*)</span></label>
                <input type="text" name="name" class="form-control" placeholder="Product Name">
              </div>
              <div class="form-group">
                <label for="Product Name">Thêm mô tả về sản phẩm</label>
                <textarea name="description" rows="6" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="Product Name">Giá sản phẩm <span class="required">(*)</span></label>
                <input type="number" name="price" class="form-control" placeholder="Product Price">
              </div>
              <div class="form-group">
                <label for="Product Name">Đơn vị sản phẩm <span class="required">(*)</span></label>
                <select class="form-control" id="quantity-type" name="quantity_type">
                  @foreach ($quantity_types as $type)
                  <option value="{{ $type->id }}">{{ $type->name }}</option>
                  @endforeach
                </select>
              </div>
              <label for="Product Name">Hỉnh ảnh của sản phẩm (Có thể tải nhiều ảnh) <span class="required">(*)</span>:</label>
              <br>
              <input type="file" class="form-control" name="photos[]" multiple accept="image/*"/>
              <br>
              <label class="switch-label">Còn hàng <span class="required">(*)</span></label>
              <label class="switch">
                <input type="checkbox" name="available" checked>
                <span class="slider round"></span>
              </label>
              <br><br>
              <button type="submit" style="margin-top: 10px; float:right; " class="btn btn-primary">Save changes</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    {{-- The create user modal --}}

    {{-- The modal --}}
    @foreach($products as $product)
    <div class="modal fade" id="modal-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/update_products" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="hidden" name="type" value="1">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                @if ($currentUser->role == $roleSuperAdmin)
                <label for="Product Name">Chọn người bán <span class="required">(*)</span></label>
                <select class="form-control" id="category" name="user_id" value={{ $product->user->id }}>
                  @foreach ($users as $user)
                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>
                @endif

                <label for="Product Name">Loại sản phẩm <span class="required">(*)</span></label>
                <select class="form-control" id="category" name="category" value="{{ $product->category ? $product->category->id : "" }}">
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="Product Name">Tên sản phẩm <span class="required">(*)</span></label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
              </div>
              <div class="form-group">
                <label for="Product Name">Thêm mô tả về sản phẩm</label>
                <textarea name="description" rows="6" class="form-control">{{ $product->description }}</textarea>
              </div>
              <div class="form-group">
                <label for="Product Name">Giá sản phẩm <span class="required">(*)</span></label>
                <input type="number" name="price" class="form-control" value="{{ $product->price }}">
              </div>
              <div class="form-group">
                <label for="Product Name">Đơn vị sản phẩm <span class="required">(*)</span></label>
                <select class="form-control" id="quantity-type" name="quantity_type" value="{{ $product->quantityType ? $product->quantityType->id : "" }}">
                  @foreach ($quantity_types as $type)
                  <option value="{{ $type->id }}">{{ $type->name }}</option>
                  @endforeach
                </select>
              </div>

              <label for="Product Name">Thêm hình ảnh (Có thể chọn nhiều)<span class="required">(*)</span>:</label>
              <br />
              <img id="add-image" width="100px" style="margin-bottom: 5px" />
              <br>
              <input id="input-add-image" type="file" class="form-control" name="add-image[]" multiple accept="image/*" />
              <br>
              
              @foreach($product->productImage as $item)
              <label for="Product Name">Sửa hình ảnh <span class="required">(*)</span>:</label>
              <br />
              <img id="update-image-{{ $item->id }}" src="{{ $item->file_name }}" width="100px" style="margin-bottom: 5px" />
              <br>
              <input attrId="{{ $item->id }}" id="input-update-image-{{ $item->id }}" type="file" class="form-control input-update-image" name="photos[{{ $item->id }}]" accept="image/*" />
              <br>
              @endforeach

              <label class="switch-label">Còn hàng <span class="required">(*)</span></label>
              <label class="switch">
                <input type="checkbox" name="available" checked>
                <span class="slider round"></span>
              </label>
              <br><br>
              <button type="submit" style="margin-top: 10px; float:right; " class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



</div>

<div class="modal fade" id="update-status-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập nhập trạng thái</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/update-status/{{ $product->id }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Trạng thái <span class="required">(*)</span></label>
            <select class="form-control" name="status" value="{{ $product->status }}">
              <option value="{{ $showStatus }}">Đã duyệt</option>
              <option value="{{ $pendingStatus}}">Chờ duyệt</option>
              <option value="{{ $cancelStatus }}">Không duyệt</option>
            </select>
          </div>

          <br><br>
          <button type="submit" style="margin-top: 10px; float:right; " class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
{{-- The modal --}}

</div>
</div>
<script>
  function readURL(input, target) {
    let inputFile = null;

    var reader = new FileReader();

    reader.onload = function(e) {
      $(target).attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }

  $(".input-update-image").click(function() {
    const id = $(this).attr('attrId');
    console.log(id);
    $(`#input-update-image-${id}`).change(function() {
      readURL(this, `#update-image-${id}`);
    });
  });
</script>
@stop
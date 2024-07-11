@extends('admin/admin')

@section('content_header')
	<h2>Category Management</h2>
@stop

@section('content')
	<div class="row">
    <div class="col-sm-12">
      <button type="button" style="width:200px; margin-bottom: 10px;" class="btn btn-block btn-primary" data-toggle="modal" data-target="#create-category">
      <i class="fas fa-plus"></i> Thêm category </button>
      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Tên category</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Category con</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">Loại </th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 150px;">Thêm category con</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">Sửa</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">Xóa</th>
          </tr>
        </thead>

        <tbody>
          @foreach($categories as $category)
          <tr role="row" class="odd" style="text-align:center;">
            <td style="vertical-align: inherit">{{ $category->name }}</td>
            <td style="vertical-align: inherit">
              @foreach ($all_categories->where('parent_id', $category->id) as $c)
                <p>{{ $c->name }}</p>
              @endforeach
            </td>
            <td style="vertical-align: inherit">{{ $category->type == 1 ? "Sản phẩm" : "Dịch vụ" }}</td>
            <td style="vertical-align: inherit"><a href="#" data-toggle="modal" data-target="#modal-small-{{ $category->id }}"><i class="fas fa-plus"></i></a></td>
            <td style="vertical-align: inherit"><a href="#" data-toggle="modal" data-target="#modal-{{ $category->id }}"><i class="fas fa-edit"></i></a></td>
            <td style="vertical-align: inherit"><a href="/delete_category/{{ $category->id }}" class="confirmation" ><i class="fas fa-trash"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $categories->links() }}


    {{-- The create  modal --}}
      <div class="modal fade" id="create-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/create_categories" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                  <label for="Product Name">Loại sản phẩm / Dịch vụ <span class="required">(*)</span></label>
                  <select class="form-control" id="type" name="type" value="">
                    <option value="1">Sản phẩm</option>
                    <option value="2">Dịch vụ</option>
                  </select>
                  <label for="Product Name">Loại sản phẩm</label>
                  <input type="text" name="product_name" class="form-control"  placeholder="Product Name" >
                </div>
                <button type="submit" style="margin-top: 10px; float:right; " class="btn btn-primary">Save changes</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      {{-- The create  modal --}}

    {{-- The small cate  modal --}}
      @foreach($categories as $category)
      <div class="modal fade" id="modal-small-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create Small Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Tên category</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  <button type="button" style="width:200px; margin-bottom: 10px;" class="btn btn-block btn-primary" data-toggle="modal" data-target="#create-small-category-{{ $category->id }}">
                  <i class="fas fa-plus"></i> Thêm category </button>
                  @foreach ($all_categories->where('parent_id', $category->id) as $c)
                  <tr role="row" class="odd" style="text-align:center;">
                    <td style="vertical-align: inherit">{{ $c->name }}</td>
                    <td style="vertical-align: inherit"><a href="/delete_category/{{ $c->id }}" onclick="confirmDelete(category)"><i class="fas fa-trash"></i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      {{-- The small cate  modal --}}

    {{-- The create small cate modal --}}
      @foreach($categories as $category)
      <div class="modal fade" id="create-small-category-{{ $category->id }}" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create Small Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/upload_small_categories" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input name="category_id" type="hidden" value="{{ $category->id }}">
                <div class="form-group">
                  <label for="Product Name">Loại sản phẩm</label>
                  <input type="text" name="small_category" class="form-control"  placeholder="Product Name" >
                </div>
                <button type="submit" style="margin-top: 10px; float:right; " class="btn btn-primary">Save changes</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      {{-- The create small cate  modal --}}


    {{--       The modal --}}
      @foreach($categories as $category)
      <div class="modal fade" id="modal-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/update_categories" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="form-group">
                  <label for="Product Name">Loại sản phẩm / Dịch vụ <span class="required">(*)</span></label>
                  <select class="form-control" id="type" name="type" value="{{ $category->type }}">
                     <option value="1">Sản phẩm</option>
                      <option value="2">Dịch vụ</option>
                  </select>
                  <label for="Product Name">Loại sản phẩm</label>
                  <input type="text" name="name" class="form-control" value="{{ $category->name }}" >
                </div>
                <button type="submit" style="margin-top: 10px; float:right; " class="btn btn-primary">Save changes</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      {{--       The modal --}}

    </div> 
  </div>
@stop
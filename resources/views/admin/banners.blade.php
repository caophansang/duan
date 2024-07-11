@extends('admin/admin')

@section('content_header')
	<h2>Banner Management</h2>
@stop

@section('content')
	<div class="row">
    <div class="col-sm-12">
      <button type="button" style="width:150px; margin-bottom: 10px;" class="btn btn-block btn-primary" data-toggle="modal" data-target="#create-banner">
      <i class="fas fa-plus"></i> Thêm Banner</button>
      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Ảnh</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Mô tả</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Target Link</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Thứ tự</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">Sửa</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">Xóa</th>
          </tr>
        </thead>

        <tbody>
          @foreach($banners as $banner)
          <tr role="row" class="odd" style="text-align:center;">
            <td><img style="height: 100px; width:100px;" src="{{ $banner->file_name }}" ></td>
            <td style="vertical-align: inherit">{{ $banner->description }}</td>
            <td style="vertical-align: inherit">{{ $banner->target_link }}</td>
            <td style="vertical-align: inherit">{{ $banner->order }}</td>
            <td style="vertical-align: inherit"><a href="#" data-toggle="modal" data-target="#modal-{{ $banner->id }}"><i class="fas fa-edit"></i></a></td>
            <td style="vertical-align: inherit"><a href="/delete_banner/{{ $banner->id }}"><i class="fas fa-trash"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $banners->links() }}


    {{-- The create user modal --}}
      <div class="modal fade" id="create-banner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create Banner</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/upload_banners" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="Target Name">Link Target</label>
                  <input type="text" name="target_link" class="form-control"  placeholder="Target Link" >
                  <br>
                  <label for="Description">Mô tả</label>
                  <textarea name="description" class="form-control"></textarea>
                  <label for="Product Name">Hỉnh ảnh của Banner <span class="required">(*)</span>:</label>
                  <br>
                  <input type="file" class="form-control" name="photo"/>
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
      {{-- The create user modal --}}

    {{--       The modal --}}
      @foreach($banners as $banner)
      <div class="modal fade" id="modal-{{ $banner->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Banner</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/update_banners" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input name="id" type="hidden" value="{{ $banner->id }}" >
                <div class="form-group">
                  <label for="Target Name">Link Target</label>
                  <input type="text" name="target_link" class="form-control" value="{{ $banner->target_link}}" >
                  <br>
                  <label for="Description">Mô tả</label>
                  <textarea name="description" class="form-control">{{ $banner->description }}</textarea>
                  <label for="Product Name">Hỉnh ảnh của Banner <span class="required">(*)</span>:</label>
                  <br>
                  <input type="file" class="form-control" name="photo"/>
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
      @endforeach
      {{--       The modal --}}

    </div> 
  </div>
@stop
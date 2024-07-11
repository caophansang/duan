@extends('admin/admin')

@section('content_header')
<h2>Quantity Management</h2>
@stop

@section('content')
<div class="row">
  <div class="col-sm-12">
    <button type="button" style="width:200px; margin-bottom: 10px;" class="btn btn-block btn-primary" data-toggle="modal" data-target="#create-quantity">
      <i class="fas fa-plus"></i> Thêm cách đếm </button>
    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
      <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Tên</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">Trạng thái</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Sửa</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Xóa</th>
        </tr>
      </thead>

      <tbody>
        @foreach($quantities as $quantity)
        <tr role="row" class="odd" style="text-align:center;">
          <td style="vertical-align: inherit">{{ $quantity->name }}</td>
          <td style="vertical-align: inherit">
            @if ($quantity->status == $showStatus)
            <span class="badge badge-success">Đã duyệt</span>
            @elseif ($quantity->status == $pendingStatus)
            <span class="badge badge-warning">Chờ duyệt</span>
            @else
            <span class="badge badge-danger">Không duyệt</span>
            @endif

            @if ($currentUser->role == $roleSuperAdmin)
            <a href="#" data-toggle="modal" data-target="#update-status-{{ $quantity->id }}"><i class="fas fa-edit"></i></a>
            @endif
          </td>
          <td style="vertical-align: inherit"><a href="#" data-toggle="modal" data-target="#modal-{{ $quantity->id }}"><i class="fas fa-edit"></i></a></td>
          <td style="vertical-align: inherit"><a href="/delete_quantity/{{ $quantity->id }}"><i class="fas fa-trash"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $quantities->links() }}


    {{-- The create user modal --}}
    <div class="modal fade" id="create-quantity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Quantity</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/create_quantity_types" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group">
                <label for="Product Name">Tên (Có thể thêm nhiều tên ngăn cách bởi dấu phẩy <span class="required">(,)(*)</span></label>
                <input type="text" name="name" class="form-control" placeholder="Product Name">
              </div>
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
    @foreach($quantities as $quantity)
    <div class="modal fade" id="modal-{{ $quantity->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Quantity</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/update_quantities" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="hidden" name="id" value="{{ $quantity->id }}">
                <label for="Product Name">Tên</label>
                <input type="text" name="name" class="form-control" value="{{ $quantity->name }}">
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


    <div class="modal fade" id="update-status-{{ $quantity->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập nhập trạng thái</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/update-quantity-status/{{ $quantity->id }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Trạng thái <span class="required">(*)</span></label>
            <select class="form-control" name="status" value="{{ $quantity->status }}">
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
@stop
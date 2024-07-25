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
<h2 class="mobile_title">Quantity Management</h2>
@stop

@section('content')
<div class="row">
  <div class="col-sm-12">
    <button type="button" style="width:200px; margin-bottom: 10px;" class="btn btn-block btn-primary mobile_button" data-toggle="modal" data-target="#create-quantity">
      <i class="fas fa-plus"></i> Thêm cách đếm </button>
      <div class="table-responsive">
    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
      <thead>
        <tr role="row">
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Tên</th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">Trạng thái</th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Sửa</th>
          <th class="sorting_asc mobile_th" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Xóa</th>
        </tr>
      </thead>

      <tbody>
        @foreach($quantities as $quantity)
        <tr role="row" class="odd" style="text-align:center;">
          <td class="mobile_th" style="vertical-align: inherit">{{ $quantity->name }}</td>
          <td class="mobile_th" style="vertical-align: inherit">
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
          <td class="mobile_th" style="vertical-align: inherit"><a href="#" data-toggle="modal" data-target="#modal-{{ $quantity->id }}"><i class="fas fa-edit"></i></a></td>
          <td class="mobile_th" style="vertical-align: inherit"><a href="/delete_quantity/{{ $quantity->id }}"><i class="fas fa-trash"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
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
@extends('admin/admin')

@section('content_header')
<h2>User Management</h2>
@stop

@section('content')
<div class="row">
  <div class="col-sm-12">
    <button type="button" style="width:150px; margin-bottom: 10px;" class="btn btn-block btn-primary" data-toggle="modal" data-target="#create-user">
      <i class="fas fa-plus"></i> Thêm user</button>
    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
      <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Ảnh</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Tên User</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Email</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">SDT</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Facebook Link</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 169px;">Địa chỉ</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">Sửa</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">Đổi mật khẩu</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">Xóa</th>
        </tr>
      </thead>

      <tbody>
        @foreach($users as $user)
        <tr role="row" class="odd" style="text-align:center;">
          <td><img style="height: 100px; width:100px;" src="{{ $user->profile_picture }}"></td>
          <td style="vertical-align: inherit">{{ $user->name }}</td>
          <td style="vertical-align: inherit">{{ $user->email }}</td>
          <td style="vertical-align: inherit">{{ $user->phone_number }}</td>
          <td style="vertical-align: inherit">{{ $user->facebook_link }}</td>
          <td style="vertical-align: inherit">{{ $user->address }}</td>
          <td style="vertical-align: inherit"><a href="#" data-toggle="modal" data-target="#modal-{{ $user->id }}"><i class="fas fa-edit"></i></a></td>
          <td style="vertical-align: inherit"><a href="#" data-toggle="modal" data-target="#change-password-{{ $user->id }}"><i class="fas fa-edit"></i></a></td>
          <td style="vertical-align: inherit"><a href="/delete_user/{{ $user->id }}"><i class="fas fa-trash"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $users->links() }}


    {{-- The create user modal --}}
    <div class="modal fade" id="create-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/create_users" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="hidden" name="id" class="form-control">
                <label for="User Name">Tên (*)</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
                <label>Email (*)</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
                <label>Mật khẩu (*)</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
                <label>Nhập lại mật khẩu (*)</label>
                <input type="password" name="password_confirmation" class="form-control">
                @error('password_confirmation')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
                <label>SDT</label>
                <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}">
                @error('phone_number')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
                <label for="User Name">Facebook Link</label>
                <input type="text" name="facebook_link" class="form-control" value="{{ old('facebook_link') }}">
                <label for="User Name">Địa chỉ</label>
                <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                <label>Hỉnh ảnh của User (*)</label>
                <br>
                <input type="file" id="create-avatar" class="form-control" name="photo" />
                <img id='create-avatar-show' width="100px" />
                @error('photo')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
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

    {{-- The modal --}}
    @foreach($users as $user)
    <div class="modal fade" id="modal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/update_users" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="{{ $user->id }}">
                <label for="User Name">Tên</label>
                <input type="text" name="name_edit" class="form-control" value="{{ old('name_edit', $user->name) }}">
                @error('name_edit')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
                <label>Email (*)</label>
                <input type="email" name="email_edit" class="form-control" value="{{ old('email_edit', $user->email) }}">
                @error('email_edit')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
                <label for="User Name">SDT</label>
                <input type="text" name="phone_number_edit" class="form-control" value="{{ old('phone_number_edit', $user->phone_number) }}">
                @error('phone_number_edit')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
                <label for="User Name">Facebook Link</label>
                <input type="text" name="facebook_link_edit" class="form-control" value="{{ old('facebook_link_edit', $user->facebook_link) }}">
                <label for="User Name">Địa chỉ</label>
                <input type="text" name="address_edit" class="form-control" value="{{ old('address_edit', $user->address) }}">
                <label for="Product Name">Hỉnh ảnh của User</label>
                <br>
                <input type="file" attrId="{{ $user->id }}" id="edit-avatar-{{ $user->id }}"  class="form-control edit-avatar" name="photo" />
                @error('photo')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
                <img id="edit-avatar-img-{{ $user->id }}" src="{{ $user->profile_picture }}" width="100px" />
                <input type="hidden" name="profile_picture" value="{{ $user->profile_picture }}" />

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


    <div class="modal fade" id="change-password-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/change-password/{{ $user->id }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="{{ $user->id }}">
                <label>Mật khẩu mới</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
                <label>Nhập lại mật khẩu</label>
                <input type="password" name="password_confirmation" class="form-control">
                @error('password_confirmation')
                <div>
                  <b class="text-danger">{{ $message }}</b>
                </div>
                @enderror
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
    {{-- The modal --}}

  </div>
</div>

<script type="text/javascript">
  @if(count($errors) > 0)
  if (window.location.search.includes('edit')) {
    $(`#modal-${window.location.search.split('=')[1]}`).modal('show');
  }

  if(window.location.search.includes('store')) {
    $('#create-user').modal('show');
  };

  if (window.location.search.includes('change-password')) {
    $(`#change-password-${window.location.search.split('=')[1]}`).modal('show');
  }
  
  @endif

  function readURL(input, target, id = null) {
    let inputFile = null;

    var reader = new FileReader();

    reader.onload = function(e) {
      $(target).attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }

  $("#create-avatar").change(function() {
    readURL(this, '#create-avatar-show');
  });

  $(".edit-avatar").click(function() {
    const userId = $(this).attr('attrId');
    $(`#edit-avatar-${userId}`).change(function() {
      readURL(this, `#edit-avatar-img-${userId}`);
    });
  });
</script>

@stop
<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\StoreRequest;
use App\Http\Requests\Users\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'photo' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'phone_number' => 'nullable|unique:users',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/users?store')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->hasFile('photo')) {
            $allowedfileExtension = ['jpg', 'jpeg', 'png'];
            $file = $request->file('photo');
            // flag xem có thực hiện lưu DB không. Mặc định là có
            $exe_flg = true;
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if (!$check) {
                // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                $exe_flg = false;
            }

            if ($exe_flg) {
                $photo = $request->photo;
                $fname    = Str::random(40);
                $photo = Image::make($photo->getRealPath());
                $photo->resize(100, 100);
                $filename = $photo->save(storage_path('app/public/users/' . $fname . '.' . $file->getClientOriginalExtension()));

                $user = User::create([
                    'name' => $request->name,
                    'phone_number' => $request->phone_number,
                    'facebook_link' => $request->facebook_link,
                    'address' => $request->address,
                    'profile_picture' => '/storage/users/' . $fname . '.' . $file->getClientOriginalExtension(),
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => User::ADMIN,
                ]);
                toastr()->success('Thêm user thành công');
            }

        }

        toastr()->error('Thêm user thành công');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);
        $validator = Validator::make($request->all(), [
            'name_edit' => 'required',
            'email_edit' => 'required|email|unique:users,email,' . $request->id,
            'phone_number_edit' => 'nullable|unique:users,phone_number,' . $request->id,
        ]);

        if ($validator->fails()) {
            return redirect('/admin/users?edit=' . $request->id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $user->name = $request->name_edit;
        $user->phone_number = $request->phone_number_edit;
        $user->facebook_link = $request->facebook_link_edit;
        $user->address = $request->address_edit;
        $user->email = $request->email_edit;

        if ($request->hasFile('photo')) {
            $allowedfileExtension = ['jpg', 'jpeg', 'png'];
            $file = $request->file('photo');
            // flag xem có thực hiện lưu DB không. Mặc định là có
            $exe_flg = true;
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if (!$check) {
                // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                $exe_flg = false;
            }

            if ($exe_flg) {
                Storage::delete('/public/' . substr($user->profile_picture, 8));
                $photo = $request->photo;
                $fname    = Str::random(40);
                $photo = Image::make($photo->getRealPath());
                $photo->resize(100, 100);
                $filename = $photo->save(storage_path('app/public/users/' . $fname . '.' . $file->getClientOriginalExtension()));
                $user->profile_picture = '/storage/users/' . $fname . '.' . $file->getClientOriginalExtension();
            }
        }

        if ($user->save()) {
            toastr()->success('Thêm user thành công');
        } else {
            toastr()->warning('Thêm user thất bại');
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        Storage::delete('/public/' . substr($user->profile_picture, 8));
        $user->delete();
        toastr()->success('Xóa user thành công');
        return redirect()->back();
    }

    public function changePassword(User $user, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/users?change-password=' . $request->id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $user->update(['password' => bcrypt($request->password)]);
        toastr()->success('Sửa mật khẩu thành công');

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Banner;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    protected function create() 
    {
    	return view('banner/create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'photo'=>'required',
            ]
        );

        if($request->hasFile('photo')) {
            $allowedfileExtension=['jpg','jpeg','png'];
            $file = $request->file('photo');
            // flag xem có thực hiện lưu DB không. Mặc định là có
            $exe_flg = true;
            // kiểm tra tất cả các files xem có đuôi mở rộng đúng không
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);

            if(!$check) {
                // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                $exe_flg = false;
            }
            // nếu không có file nào vi phạm validate thì tiến hành lưu DB
            if($exe_flg) {
                // lưu product
                $photo = $request->photo;
                $fname    = Str::random(40);
                $photo = Image::make($photo->getRealPath());
                $photo->resize(2000, 1000);
                $filename = $photo->save(storage_path('app/public/banners/'.$fname.'.'.$file->getClientOriginalExtension()));

                $banner= Banner::create([
                    'target_link' => $request->target_link,
                    'description' => $request->description,
                    'file_name' => '/storage/banners/'.$fname.'.'.$file->getClientOriginalExtension()
                ]);

                toastr()->success('Thêm banner thành công');
            } else {
                toastr()->warning('Thêm banner thất bại');
            }
        }

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $banner = Banner::findOrFail($request->id);

        if($request->hasFile('photo')) {
            $allowedfileExtension=['jpg','jpeg','png'];
            $file = $request->file('photo');
            // flag xem có thực hiện lưu DB không. Mặc định là có
            $exe_flg = true;
            // kiểm tra tất cả các files xem có đuôi mở rộng đúng không
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);

            if(!$check) {
                // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                $exe_flg = false;
            }
            // nếu không có file nào vi phạm validate thì tiến hành lưu DB
            if($exe_flg) {
                // lưu product
                Storage::delete('/public/'.substr($banner->file_name,8));
                $photo = $request->photo;
                $fname    = Str::random(40);
                $photo = Image::make($photo->getRealPath());
                $photo->resize(2000, 1000);
                $filename = $photo->save(storage_path('app/public/banners/'.$fname.'.'.$file->getClientOriginalExtension()));

                $banner->target_link = $request->target_link;
                $banner->description = $request->description;
                $banner->file_name = '/storage/banners/'.$fname.'.'.$file->getClientOriginalExtension();

            } else {
                $banner->target_link = $request->target_link;
                $banner->description = $request->description;
            }
        }

        if ($banner->save()) {
            toastr()->success('Sửa banner thành công');
        } else {
            toastr()->warning('Sửa banner thất bại');
        }

        return redirect()->back();

    }

    public function destroy ($id) 
    {
        $banner = Banner::findOrFail($id);
        Storage::delete('/public/'.substr($banner->file_name,8));

        if ($banner->delete()) {
            toastr()->success('Xóa banner thành công');
        } else {
            toastr()->warning('Xóa banner thất bại');
        }

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuantityType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class QuantityTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantity/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = Auth::user()->role === User::SUPER_ADMIN ? QuantityType::SHOW_STATUS : QuantityType::PENDING_STATUS;
        
        if(empty($request->name)) {
            toastr()->warning('Không có gì để thêm');
            return redirect()->back();
        }

        $raw_data = $request->name;
        $data = explode(',', $raw_data);

        foreach ($data as $item) {
            $item = trim($item, "");
            // $item = preg_replace('/\s+/', '', $item);
            QuantityType::firstOrCreate(
                ['name' => $item],
                ['status' => $status]
            );

        }

        toastr()->success('Thêm cách đếm thành công');
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $quantity = QuantityType::findOrFail($request->id);
        $quantity->name = trim($request->name, "");
        $quantity->status = Auth::user()->role === User::SUPER_ADMIN ? QuantityType::SHOW_STATUS : QuantityType::PENDING_STATUS;

        if ($quantity->save()) {
            toastr()->success('Sửa cách đếm thành công');
        } else {
            toastr()->warning('Sửa cách đếm thất bại');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quantity = QuantityType::findOrFail($id);

        if ($quantity->delete()) {
            toastr()->success('Xóa cách đếm thành công');
        } else {
            toastr()->warning('Xóa cách đếm thất bại');
        }

        return redirect()->back();
    }

    public function updateStatus(QuantityType $quantity, Request $request)
    {
        $quantity->update(['status' => $request->status]);
        toastr()->success('Cập nhập trạng thái thành công');

        return redirect()->back();
    }
}
